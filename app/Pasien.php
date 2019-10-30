<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Pasien extends Model
{
    //
    protected $table = 'pasien';
    protected $fillable = ['nama_pasien','tanggal_lahir','agama','jenis_kelamin','no_telpon','alamat','gambar','user_id']; // untuk menambahkan data/ create



// untuk mengakali gambar, atau gambar dengan nilai null 
    public function getGambar()
    {
        if(!$this->gambar){
            return asset('images/defaul.jpg');

        }
        return asset('images/'.$this->gambar);
    }


    // perintah untuk relasi Many To Many, 
    public function penyakit()
    {
    // return $this->belongsToMany(Penyakit::class);  
    // return $this->belongsToMany(Penyakit::class)->withPivot(['obat']);
     return $this->belongsToMany(Penyakit::class)->withPivot(['obat'])->withTimeStamps(); // perintah relasi antar mapel dan siswa 

    }




}
