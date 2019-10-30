<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    //
    public function index(Request $request)
    {
        $data_dokter = \App\Dokter::all();

        return view('dokter.index',['data_dokter' => $data_dokter]);
    }





    public function create(Request $request)
    {
       
    $dokter = \App\Dokter::create($request->all());

    return redirect('/dokter')->with('sukses','Data Dokter berhasil di tambahkan...');
    }



    public function edit($id)

    {
        $dokter = \App\Dokter::find($id);

        return view('dokter/edit',['dokter' => $dokter]);
    }


    public function update(Request $request,$id)
    {
        $dokter = \App\Dokter::find($id);
        $dokter->update($request->all());

        return redirect('/dokter')->with('sukses','Data Berhasil di Update..!');
    }
    


    public function delete($id)
    {
        $dokter = \App\Dokter::find($id);
        $dokter->delete($dokter);

        return redirect('/dokter')->with('sukses','Data Berhasil Di Hapus..!');
    }

}
