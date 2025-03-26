<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {  
    Route::get('/', function () {
        return view('pesnuk');
    })->name('home');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::get('/registration', [AuthController::class, 'registration'])->name('register');
    Route::post('/registration', [AuthController::class, 'store'])->name('postRegister');

    // Route untuk halaman verifikasi email
    Route::get('/verify-email', function () {
        return view('auth.verify-email');
    })->name('verifyEmail');
    
});
