<?php

namespace App\Http\Controllers;

use Auth; //import bawaan laravel, untuk postlogin 

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auths.login');
    }



    public function postlogin(Request $request)
    {
        // dd($request->all());
        // membuat class percabangan 
        if(Auth::attempt($request->only('email','password'))){
         return redirect('/dashboard');   // kalo berhasil langsung di redirect ke halaman dashboard 
        }
            return redirect('/login');   
    }


    

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }








}
