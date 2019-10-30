<?php


// Route::get('/', function () {
//     return view('home');
// });

Route::get('/','SiteController@home');
Route::get('/about','SiteController@about');
Route::get('/register','SiteController@register');
Route::post('/postregister','SiteController@postregister');


Route::get('/login','AuthController@login')->name('login'); // name->('login') artinya akan di direrect ke nama login dari Auth bawaan laravel 
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

// fitur MIDDLEWARE UNTUK MELINDUNGI JIKA ADA USER YANG INGIN MASUK KE SISTEM 

// Route::group(['middleware' => 'auth'],function(){ // fitur 1 auth

// fitur menggunakan 2 auth atau lebih
        Route::group(['middleware' => ['auth','checkRole:admin']],function(){ // yang bisa mengakses CRUD adalah checkRole parameter admin 
                Route::get('/pasien','PasienController@index');
                Route::post('/pasien/create','PasienController@create');
                Route::get('/pasien/{id}/edit','PasienController@edit');
                Route::post('/pasien/{id}/update','PasienController@update');
                Route::get('/pasien/{id}/delete','PasienController@delete');
                Route::get('/pasien/{id}/detail','PasienController@detail');
                Route::post('/pasien/{id}/addobat','PasienController@addobat');
                Route::get('/pasien/{pasien}/{idpenyakit}/deleteobat','PasienController@deleteobat');
                
                //pertemuan ke 23 export excel 
                Route::get('/pasien/exportexcel','PasienController@exportExcel');
    

                //Route untuk Dokter 
                Route::get('/dokter','DokterController@index');
                Route::post('/dokter/create','DokterController@create');
                Route::get('/dokter/{id}/edit','DokterController@edit');
                Route::post('/dokter/{id}/update','DokterController@update');
                Route::get('/dokter/{id}/delete','DokterController@delete');
         }); // penutup middleware 

            


        // fitur menggunakan 2 auth atau lebih
        Route::group(['middleware' => ['auth','checkRole:admin,pasien']],function(){ // yang bisa mengakses CRUD adalah checkRole parameter admin 
                Route::get('/dashboard','DashboardController@index');
        });







