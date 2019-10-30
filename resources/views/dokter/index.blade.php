@extends('layouts.master')

@section('content')

@if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{session('sukses')}}
    </div>
@endif


<div class="row">
    <div class="panel"> 
            <div class="box-tools pull-left">
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                TAMBAN DATA DOKTER 
                </button>
            </div>
                 <div class="panel-heading"> 
                         <h1 class="panel-title">      </h1>
        
                 </div>
            </div>
     </div>



        <div class="row">
            <div class="col-12">
                 <!-- s -->
               <h2>DATA DOKTER</h2>      
                     </div>

                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA PASIEN</th>
                                        <th>TANGGAL LAHIR</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>SPESIALIS</th>
                                        <th>AGAMA</th>
                                        <th>NO TELPON</th>
                                        <th>ALAMAT</th>
                                        <th> </th>
                                        <th> </th> 
                                    </tr>
                                <thead>

                                <tbody>
                                    @foreach($data_dokter as $dokter)
                                        <tr>
                                            <td>{{$dokter->id}}</td>
                                            <td>{{$dokter->nama_dokter}}</th>
                                            <td>{{$dokter->tanggal_lahir}}</td>
                                            <td>{{$dokter->jenis_kelamin}}</td>
                                            <td>{{$dokter->spesialis}}</td>
                                            <td>{{$dokter->agama}}</td>
                                            <td>{{$dokter->no_telpon}}</td>
                                            <td>{{$dokter->alamat}}</td>
                                            <td> <a href="/dokter/{{$dokter->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                                            <td> <a href="/dokter/{{$dokter->id}}/delete" class="btn btn-danger btn-sm" onClick="return confirm('Yakin mau dihapus....?')">Delete</a>  </td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>

                        <!-- pembungkus boostreet -->
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">SILAHKAN ISI DATA DOKTER</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            
                                                <form action="/dokter/create" method="POST">
                                                        {{csrf_field()}}

                                                        <!-- has-error artisan form validation -->
                                                        <div class="form-group{{$errors->has('nama_pasien') ? 'has-error' : ''}}"> 
                                                            <label for="exampleInputEmail1">NAMA DOKTER</label>
                                                            <input name="nama_dokter" type="text" class="form-control" 
                                                            id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Dokter" value="{{old('nama_dokter')}}">                                       
                                                           <!-- untuk menampilkan error di form tambah siswa nama depan  -->
                                                                @if($errors->has('nama_dokter'))
                                                                    <span class="help-block">{{$errors->first('nama_dokter')}}</span> 
                                                                  @endif
                                                        </div>

                                                        <div class="form-group{{$errors->has('tanggal_lahir') ? 'has-error' : ''}}"> 
                                                            <label for="exampleInputEmail1">TANGGAL LAHIR</label>
                                                            <input name="tanggal_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Tanggal Lahir" value="{{old('tanggal_lahir')}}">                                          
                                                            @if($errors->has('tanggal_lahir'))
                                                                <span class="help-block">{{$errors->first('tanggal_lahir')}}</span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group{{$errors->has('jenis_kelamin') ? 'has-error' : ''}}"> 
                                                            <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
                                                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                                                <option value="L"{{(old('jenis_kelamin') == 'L') ? ' selected' : ''}}>Laki-Laki</option>
                                                                <option value="P"{{(old('jenis_kelamin') == 'P') ? ' selected' : ''}}>Perempuan</option>
                                                            </select>
                                                            @if($errors->has('jenis_kelamin'))
                                                                <span class="help-block">{{$errors->first('jenis_kelamin')}}</span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group{{$errors->has('spesialis') ? 'has-error' : ''}}"> 
                                                            <label for="exampleInputEmail1">SPESIALIS</label>
                                                            <input name="spesialis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Spesialis" value="{{old('spesialis')}}">   
                                                            @if($errors->has('spesialis'))
                                                                <span class="help-block">{{$errors->first('spesialis')}}</span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group{{$errors->has('agama') ? 'has-error' : ''}}"> 
                                                            <label for="exampleFormControlSelect1">AGAMA</label>
                                                            <select name="agama" type="text" class="form-control" id="exampleFormControlSelect1">
                                                                <option value="ISLAM"{{(old('agama') == 'ISLAM') ? ' selected' : ''}}>ISLAM</option>
                                                                <option value="KRISTEN"{{(old('agama') == 'KRISTEN') ? ' selected' : ''}}>KRISTEN</option>
                                                                <option value="KATOLIK"{{(old('agama') == 'KATOLIK') ? ' selected' : ''}}>KATOLIK</option>
                                                                <option value="HINDU"{{(old('agama') == 'HINDU') ? ' selected' : ''}}>HINDU</option>
                                                                <option value="BUDHA"{{(old('agama') == 'BUDHA') ? ' selected' : ''}}>BUDHA</option>
                                                                <option value="KONG_HU_CUU"{{(old('agama') == 'KONG_HU_CUU') ? ' selected' : ''}}>KONG HU CUU</option>
                                                            </select>
                                                            @if($errors->has('agama'))
                                                                <span class="help-block">{{$errors->first('agama')}}</span>
                                                            @endif
                                                        </div>
                                                      
                                                        
                                                       

                                                        <div class="form-group{{$errors->has('no_telpon') ? 'has-error' : ''}}"> 
                                                            <label for="exampleInputEmail1">NO TELPON</label>
                                                            <input name="no_telpon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telpon" value="{{old('no_telpon')}}">   
                                                            @if($errors->has('no_telpon'))
                                                                <span class="help-block">{{$errors->first('no_telpon')}}</span>
                                                            @endif
                                                        </div>

                                                        <div class="form-group{{$errors->has('alamat') ? 'has-error' : ''}}"> 
                                                            <label for="exampleFormControlTextarea1">ALAMAT</label>
                                                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
                                                            @if($errors->has('alamat'))
                                                                <span class="help-block">{{$errors->first('alamat')}}</span>
                                                            @endif
                                                        </div>
                                                

                                                      
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">KEMBALI</button>
                                                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                                                        </div>
                                                </form>
                                        </div>
                                    </div>
                           

@endsection




