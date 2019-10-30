@extends('layouts.master')

@section('content')
    <h1>DATA EDIT PASIEN</h1>
    
          <div class="row">
          <!-- untuk memperlebar tampilan form edit -->
            <div class="col-lg-12"> 
                
            <div class="box-body">
                            <form action="/dokter/{{$dokter->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="inputSuccess">NAMA DOKTER</label>
                                                <input name="nama_dokter" type="text" class="form-control" 
                                                id="inputSuccess" aria-describedby="emailHelp" 
                                                placeholder="Nama Pasien" value="{{$dokter->nama_dokter}}">                                       
                                            </div>

                                            <div class="form-group">
                                                <label for="inputSuccess">TANGGAL LAHIR</label>
                                                <input name="tanggal_lahir" type="text" class="form-control" id="inputSuccess"
                                                aria-describedby="emailHelp" placeholder="Tanggal Lahir" value="{{$dokter->tanggal_lahir}}">                                          
                                            </div>

                                            <div class="form-group">
                                            <label>JENIS KELAMIN</label>
                                            <select name="jenis_kelamin" class="form-control" id="inputSuccess">
                                                <option value="L" @if($dokter->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                                <option value="P" @if($dokter->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                                            </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputSuccess">SPESIALIS</label>
                                                <input name="spesialis" type="text" class="form-control" id="inputSuccess" 
                                                aria-describedby="emailHelp" placeholder="No Telpon" value="{{$dokter->spesialis}}">   
                                            </div>

                                            <div class="form-group">
                                                <label for="inputSuccess">AGAMA</label>
                                                <input name="agama" type="text" class="form-control" 
                                                id="inputSuccess" aria-describedby="emailHelp" 
                                                placeholder="Agama" value="{{$dokter->agama}}">                                       
                                            </div>

                                           

                                            <div class="form-group">
                                                <label for="inputSuccess">NO TELPON</label>
                                                <input name="no_telpon" type="text" class="form-control" id="inputSuccess" 
                                                aria-describedby="emailHelp" placeholder="No Telpon" value="{{$dokter->no_telpon}}">   
                                            </div>

                                          

                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">ALAMAT</label>
                                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Pasien..">
                                                {{$dokter->alamat}}</textarea>
                                            </div>
                                            </div>
                                            <div class="modal-footer">
                                            
                                                <a href="/dokter" class="btn btn-danger">KEMBALI</a>
                                                <!-- <button type="reset" class="btn btn-warning" >ULANG</button> -->
                                                <button type="submit" class="btn btn-primary">SIMPAN</button>
                                            </div>
                                        </form>
                                     </div>
                                </div>
             <!-- pembungkus boostreet -->
        </div>
    </div>


    @endsection


