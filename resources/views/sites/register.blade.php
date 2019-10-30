@extends('layouts.frontend')

@section('content')

<div class="intro-content">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="wow fadeInDown animated" data-wow-offset="0" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInDown;">
                <h2 class="h-ultra">{{config('medical.title')}}</h2>
              </div>
              <div class="wow fadeInUp animated" data-wow-offset="0" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h4 class="h-light">{{config('medical.sub_welcome_message')}}<span class="color"> </span> </h4>
              </div>
              <div class="well well-trans">
                <div class="wow fadeInRight animated" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">

                  <ul class="lead-list">
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Affordable monthly premium packages</strong><br>Lorem ipsum dolor sit amet, in verterem persecuti vix, sit te meis</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Choose your favourite doctor</strong><br>Sit zril sanctus scaevola ei, ea usu movet graeco</span></li>
                    <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Only use friendly environment</strong><br>Wisi lobortis eos ex, per at movet delectus, qui no vocent deleniti</span></li>
                  </ul>

                </div>
              </div>


            </div>
            <div class="col-lg-6">
              <div class="form-wrapper">
                <div class="wow fadeInRight animated" data-wow-duration="2s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInRight;">

                  <div class="panel panel-skin">
                    <div class="panel-heading">
                      <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span>Registrasi Pendaftaran Online Pasien <small> </small></h3>
                    </div>
                    <div class="panel-body">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>

                      <!-- <form class="form-wrap" action="#"> di ganti dengan kode di bawah-->
                       {!! Form::open(['url' => '/postregister','class' => 'form-wrap']) !!}
                            <!-- input form laravel colletive 	 -->
                            {!! form::text('nama_pasien','',['class' => 'form-control','placeholder' => 'Nama Pasien']) !!}
                            {!! form::text('tanggal_lahir','',['class' => 'form-control','placeholder' => 'Tanggal Lahir']) !!} 
                            <div class="form-select" id="service-select">
                                {!! Form::select('jenis_kelamin', ['' => 'Pilih Jenis Kelamin','L' => 'Laki-Laki', 'P' => 'Perempuan'],'L'); !!} 
                            </div>
                            {!! form::text('agama','',['class' => 'form-control','placeholder' => 'Agama']) !!}
                            {!! form::text('no_telpon','',['class' => 'form-control','placeholder' => 'No Telpon']) !!}
                            {!! form::textarea('alamat','',['class' => 'form-control','placeholder' => 'Alamat']) !!}
                            {!! form::email('email','',['class' => 'form-control','placeholder' => 'Email']) !!}
                            {!! form::password('password',['class' => 'form-control','placeholder' => 'Password']) !!}
                            <input type="submit" value="Kirim" class="btn btn-skin btn-block btn-lg">
                      <!-- </form> -->
                      {!!Form::close()!!}
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@stop