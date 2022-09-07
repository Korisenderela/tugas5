<?php

namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller
{
    function showlogin(){
        return view('login');
    }
}

function loginProcess(){
    if(Auth()->attempt(['email' => request('email'), 'password' => request('password')])){
        return redirect('beranda')->with('succes', 'Login Berhasil');
    }else{
        return back()->with('danger', 'Login Gagal Silahkan cek email dan pasword anda');
    }
}

function logout(){
    Auth()->logout();
    return redirect('admin/beranda');

}

function registration(){

}

function forgotPasword(){
    
}