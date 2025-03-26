<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    function index(){
        return view("logreg.login");
    }
    function login(Request $request){

       $dataLogin = $request->only("email", "password"); // buat ambil data input
        if(Auth::attempt($dataLogin)){ // proses login
            return redirect("/kegiatan");
        }else{
            return redirect("/login")->with("error", "email atau password salah");
        }

    }

    function logout(){
        // Session::flush();
        Auth::logout();

        return redirect('/login');
    }
}