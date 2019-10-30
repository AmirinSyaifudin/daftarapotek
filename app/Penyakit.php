<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    //
    protected $table = 'penyakit';
    protected $fillable = ['nama_penyakit','jenis_penyakit'];


    // function untuk merelasasikan tabel pasien da tabel penyakit
    public function pasien()
    {
        // return $this->belongsToMany(Pasien::class);

        // ->withPivot(['obat']); memanggil tabel pivot untuk menampilkan data obat 
         return $this->belongsToMany(Pasien::class)->withPivot(['obat']);
        // return $this->belongsToMany(Pasien::class)->withPivot(['obat'])->withTimeStamps();
    }
}
