@extends('layouts.master')
@section('content')

<div class="row">
    <div class="panel"> 

          <div class="panel-heading"> 
              <h1 class="panel-title">      </h1>
                </div>
                      </div>
                        </div>

                            <!-- pertemuan ke 18 => menggunakan function untuk query bilder untuk validasi nama penyakit yang sudah ada, biar tidak ada data penyekit yang doubel -->
                            @if(session('sukses'))
                                    <div class="alert alert-success" role="alert">
                              {{session('sukses')}}
                            </div>
                            @endif

                            @if(session('error'))
                                    <div class="alert alert-danger" role="alert">
                              {{session('error')}}
                            </div>
                            @endif

                                      <section class="content">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <!-- Profile Image -->
                                              <div class="box box-primary">
                                                <div class="box-body box-profile">
                                                 
                                                  <figure class="figure">
                                                      <img src="{{$pasien->getGambar()}}" class="figure-img img-fluid rounded" alt="Gambar">
                                                      <figcaption class="figure-caption">Keterangan Gambar</figcaption>
                                                  </figure>
                                                  
                                                  <!-- <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture"> -->
                                                  <h3 class="profile-username text-center"> </h3>

                                                  <p class="text-muted text-center">Detail</p>

                                                  <ul class="list-group list-group-unbordered">
                                                    <li class="list-group-item">
                                                      <b>Nama Pasien</b> <a class="pull-right">{{$pasien->nama_pasien}}</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <b>Tanggal Lahir</b> <a class="pull-right">{{$pasien->tanggal_lahir}}</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <b>Agama</b> <a class="pull-right">{{$pasien->agama}}</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <b>Jenis Kelamin</b> <a class="pull-right">{{$pasien->jenis_kelamin}}</a>
                                                    </li>
                                                    <li class="list-group-item">
                                                      <b>No Telpon</b> <a class="pull-right">{{$pasien->no_telpon}}</a>
                                                    </li>
                                                    <!-- <li class="list-group-item">
                                                      <b>Alamat</b> <a class="pull-right">{{$pasien->alamat}}</a>
                                                    </li> -->
                                                  </ul>

                                                  <div class="modal-footer">  
                                                      <a href="/pasien" class="btn btn-danger">KEMBALI</a>
                                                      <a href="/pasien/{{$pasien->id}}/edit" class="btn btn-warning">Edit</a>
                                                      <!-- <button type="submit" class="btn btn-primary">SIMPAN</button> -->
                                                  </div>
                                                  <!-- <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a>
                                                  <a href="#" class="btn btn-primary btn-block"><b>Edit</b></a> -->
                                                </div>
                                                <!-- /.box-body -->
                                              </div>
                                            </div>

                                            <!-- /.col -->
                                            <div class="col-md-9">

                                              <div class="box-tools pull-left">
                                                  <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                                                        ADD DATA PENYAKIT PASIEN
                                                  </button>
                                              </div>

                                              <div class="nav-tabs-custom">
                                             
                                                <ul class="nav nav-tabs">
                                                  <li class="active"><a href="#activity" data-toggle="tab"><h2>DETAIL DIAGNOSA PASIEN</h2> </a></li>
                                                  <td>
                                                      
                                                  </td>                  
                                                 </ul>
                         

                                                <div class="tab-content">
                                                  <div class="active tab-pane" id="activity">
                                                    <!-- Post -->
                                                    <div class="post">
                                                      <!-- /.user-block -->

                                                      <p>                    
                                                        <div class="row">
                                                          <div class="col-12">      
                                                             </div> 

                                                                  <table class="table table-bordered table-striped">
                                                                        <thead class="thead-dark">
                                                                            <tr>
                                                                                <th>NAMA PENYAKIT</th>
                                                                                <th>JENIS PENYAKIT</th>
                                                                                 <th>OBAT</th> 
                                                                                 <th>NAMA DOKTER</th>
                                                                                <!-- <th>DOKTER</th> -->
                                                                                <th> </th>
                                                                            </tr>
                                                                        <thead>

                                                                        <tbody>
                                                                            @foreach($pasien->penyakit as $penyakit)
                                                                                <tr>
                                                                                    <td>{{$penyakit->nama_penyakit}}</td>
                                                                                    <td>{{$penyakit->jenis_penyakit}}</td>
                                                                                    <!-- pemanggilan pivot tabel , manty to many -->
                                                                                    <td>{{$penyakit->pivot->obat}}</td>
                                                                                    <td> </td> 
                                                                                    <td> <a href="/pasien/{{$pasien->id}}/{{$penyakit->id}}/deleteobat" class="btn btn-danger btn-sm" onClick="return confirm('Yakin mau dihapus....?')">Delete</a>  </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                     
                                                     </div>
                                                   <!-- /.post -->
                                              </div>
                                           </div>
                                       </li>
                                     <!-- END timeline item -->                                     
                                  </ul>
                              </div>                           
                          </div>
                        <!-- /.tab-content -->
                     </div>
                   <!-- /.nav-tabs-custom -->
                </div>
              <!-- /.col -->
            </div>
         <!-- /.row -->
     </section>


          
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ADD DATA PENYAKIT </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                
                                <form action="/pasien/{{$pasien->id}}/addobat" method="POST" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                    <!-- has-error artisan form validation -->
                                     <div class="form-group"> 
                                        <label for="penyakit">NAMA PENYAKIT</label>
                                        <select class="form-control" id="penyakit" name="penyakit">                                        
                                        @foreach($penyakitpasien as $penyakitp)
                                            <option value="{{$penyakitp->id}}">{{$penyakitp->nama_penyakit}}</option>
                                        @endforeach
                                        </select>
                                    </div> 

                                    <div class="form-group"> 
                                        <label for="penyakit">JENIS PENYAKIT</label>
                                        <select class="form-control" id="penyakit" name="penyakit">                                        
                                        @foreach($penyakitpasien as $penyakitp)
                                            <option value="{{$penyakitp->id}}">{{$penyakitp->jenis_penyakit}}</option>
                                        @endforeach
                                        </select>
                                    </div>  

                                     <div class="form-group{{$errors->has('obat') ? 'has-error' : ''}}"> 
                                        <label for="exampleInputEmail1">OBAT</label>
                                        <input name="obat" type="text" class="form-control" 
                                        id="exampleInputEmail1" aria-describedby="emailHelp" 
                                        placeholder="Nama Obat" value="{{old('obat')}}">                                       
                                          @if($errors->has('obat'))
                                              <span class="help-block">{{$errors->first('obat')}}</span> 
                                          @endif
                                    </div> 

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">KEMBALI</button>
                                        <button type="submit" class="btn btn-primary">SIMPAN</button>
                                        </form>
                                    
                                    </div>
                           
                      </div>
                </div>
                          
@endsection




