<?php
namespace App\Http\Controllers;

use App\Mail\VerificationMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function registration()
    {
        return view('logreg.registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $verificationCode = Str::random(6); // Generate kode verifikasi 6 karakter

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verification_code' => $verificationCode,
        ]);

        // Kirim email verifikasi
        Mail::to($request->email)->send(new VerificationMail($verificationCode));

        // Redirect ke halaman verifikasi
        return redirect()->route('verify')->with('email', $request->email);
    }

    public function verify()
{
    return view('auth.verify');
}

public function postVerify(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'verification_code' => 'required',
    ]);

    $user = User::where('email', $request->email)
                ->where('verification_code', $request->verification_code)
                ->first();

    if (!$user) {
        return redirect()->back()->with('error', 'Kode verifikasi salah.');
    }

    $user->update([
        'email_verified_at' => now(),
        'verification_code' => null, // Hapus kode verifikasi setelah berhasil
    ]);

    return redirect('/login')->with('success', 'Email berhasil diverifikasi, silakan login.');
}



}
