<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //
    protected $table = 'dokter';
    protected $fillable = ['nama_dokter','jenis_kelamin','tanggal_lahir','spesialis','agama','no_telpon','alamat'];
}
