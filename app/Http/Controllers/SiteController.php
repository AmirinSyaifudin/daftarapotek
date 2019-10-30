<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function home()
    {
        return view('sites.home');
    }

    public function about()
    {
        return view('sites.about');
    }


    public function register()
    {
        return view('sites.register');
    }


    public function postregister(Request $request)
    {
      // dd($request->all());
      //Insert  table Users
      $user = new \App\User;
      $user->role = 'pasien';
      $user->name = $request->nama_pasien;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->remember_token = str_random(60);
      $user->save();

       // multilevel user 
       // Insert  table pasien
      $request->request->add(['user_id' => $user->id]);         // di gunakan untuk menambahkan request all user_id 
      $pasien = \App\Pasien::create($request->all());           // code di atas untuk menambahkan request->all()
      
      return redirect('/')->with('sukses','Data Berhasil Di Input..');
       
    }




}
