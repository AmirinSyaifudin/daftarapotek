<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Pasien;

// export excel 
use App\Exports\PasienExport;
use Maatwebsite\Excel\Facades\Excel;

class PasienController extends Controller
{
    //
    public function index(Request $request)

    {
      // fitur pencarian 
      // dd($request->all());
       // membuat percabangan 
     if ($request->has('cari')){
       $data_pasien = \App\Pasien::where('nama_pasien','LIKE','%'.$request->cari.'%')->get();
     } else {
       $data_pasien = \App\Pasien::all();
     }
        // membuat variabel dan sebutkan nama modelnya dan namespace App
        // App artinya namespace di model 
        // Kelurahan artinya class yang ada di model 
        //  $data_kelurahan = \App\Kelurahan::all();  // all();  artinya mengambil semua data yang ada di data kelurahan 
        
        
        //  selanjutnya data siswa di lempar ke view
        //  dalam array 'data_kelurahan' artinya string  
        //  return view('kelurahan.index',['data_kelurahan' => $data_kelurahan]);
        // $data_pasien = \App\Pasien::all();
        return view('pasien.index',['data_pasien' => $data_pasien]);
    }




    public function create(Request $request)
    {
    // form  add/ tambah validate 
    $this->validate($request,[
        'nama_pasien' => 'required| min:2',
         // 'email' => 'required|email|unique:users', // berfungsi agar siswa tidak boleh memiliki email yang sama // catatan email ada di tabel user, code di edit menjadi users
        'tanggal_lahir' => 'required',
        'agama' => 'required',
        'jenis_kelamin' => 'required',
        'no_telpon' => 'required',
        'gambar' => 'mimes:jpg,png', // format gambar hanya jpg dan png yang di izinkan 
        'alamat' => 'required',
    ]);



    

      // insert add tambah gambar 
       if($request->hasFile('gambar')){
         $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
         // perintah untuk memasukkan file ke databases
         $pasien->gambar = $request->file('gambar')->getClientOriginalName();
         $pasien->save();
       }


      //Insert ke table Users
      $user = new \App\User;
      $user->role = 'pasien';
      $user->name = $request->nama_pasien;
      $user->email = $request->email;
      $user->password = bcrypt('rahasia');
      $user->remember_token = str_random(60);
      $user->save();

      // multilevel user 
      // Insert ke table siswa
      $request->request->add(['user_id' => $user->id]); // di gunakan untuk menambahkan request all user_id 
      $pasien = \App\Pasien::create($request->all()); // code di atas untuk menambahkan request->all()
      
      
      
      return redirect('/pasien')->with('sukses','Data Berhasil Di Input..');
    }



     public function edit($id)
    
    {
       $pasien = \App\Pasien::find($id);
      return view('pasien/edit',['pasien' => $pasien]);

     }


     

     public function update(Request $request,$id)
     {

      $pasien = \App\Pasien::find($id);
      $pasien->update($request->all());

      // perintah untuk memasukkan gambar 
      if($request->hasFile('gambar')){
        $request->file('gambar')->move('images/', $request->file('gambar')->getClientOriginalName());
        // perintah untuk memasukkan gambar ke database
        $pasien->gambar = $request->file('gambar')->getClientOriginalName();
        $pasien->save();
      }

      return redirect('/pasien')->with('sukses','Data Berhasil di Update');

     }





     public function delete($id)
     {
       $pasien = \App\Pasien::find($id);
       $pasien->delete($pasien);
       return redirect('/pasien')->with('sukses','Data Berhasil Di Hapus..');
     }




     public function detail($id)
     {
       // tarik satu data siswa 
       $pasien = \App\Pasien::find($id); // penampilkan semau data pasien 
       $penyakitpasien = \App\Penyakit::all(); // penampilkan semua data kelurahan 

       // dd($penyakit);
       return view('pasien.detail',['pasien' => $pasien,'penyakitpasien' => $penyakitpasien]);
     }



    //  pertemuan ke 16 sampai 18 
     public function addobat(Request $request,$idpasien)
     {

       // dd($request->all());
           $pasien = \App\Pasien::find($idpasien);

           // pertemuan ke 18 => menggunakan function untuk QUERY BILDER untuk validasi nama penyakit yang sudah ada, biar tidak ada data penyekit yang doubel
                if($pasien->penyakit()->where('penyakit_id',$request->penyakit)->exists()){
                      return redirect('pasien/'.$idpasien.'/detail')->with('error','Data Penyakit Sudah ada..!!!');
                }
           
           $pasien->penyakit()->attach($request->penyakit,['obat' => $request->obat]);
          
          
           return redirect('pasien/'.$idpasien.'/detail')->with('sukses','Data Obat berhasil diMasukkan..!!!');
      
     }

 


     public function deleteobat($idpasien,$idpenyakit)
     {
       $pasien = \App\Pasien::find($idpasien);
       $pasien->penyakit()->detach($idpenyakit);

       return redirect()->back()->with('sukses','Data Obat berhasil di Hapus..!');
     }




      // Pertemuan ke 23 membuat package export PDF dan Excel 
      public function exportexcel()  
      {
          return Excel::download(new PasienExport, 'Pasien.xlsx');
      }








      

}
