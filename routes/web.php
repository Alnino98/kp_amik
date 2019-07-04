<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auths/login');
});

Auth::routes();
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/mutasi', 'MutasiController@index');
    Route::get('/index', 'DashboardController@index');
    
    Route::get('/changePassword','HomeController@showChangePasswordForm');
    Route::post('/changePassword','HomeController@changePassword')->name('changePassword');
    
    //rab
    Route::get('/rab', 'HomeController@rab')->name('rab');
    Route::post('/saverab', 'HomeController@saveRab');
    Route::get('/gajipegawai', 'HomeController@gajiPegawai');
    Route::get('/pengajarandanpendidikan', 'HomeController@pengajaranDanPendidikan');
    Route::get('/administrasiketatausahaan', 'HomeController@administrasiKetatausahaan');
    Route::get('/rumahtangga', 'HomeController@rumahTangga');
    Route::get('/pemeliharaandanperbaikan', 'HomeController@pemeliharaanDanPerbaikan');
    Route::get('/investasi', 'HomeController@Investasi');
    Route::get('/akreditasiprodi', 'HomeController@akreditasiProdi');

    //rapb
    Route::get('/rapb', 'RapbController@rapb')->name('rapb');
    Route::post('/saverapb', 'RapbController@saveRapb');
        //Transitoris
    Route::get('/danabangunan', 'RapbController@danabangunan');
    Route::get('/biayatetap', 'RapbController@biayatetap');
    Route::get('/biayasks', 'RapbController@biayasks');
    Route::get('/biayapraktikum', 'RapbController@biayapraktikum');
        //Non-Transitoris
    Route::get('/registrasi', 'RapbController@registrasi');
    Route::get('/perpustakaan', 'RapbController@perpustakaan');
    Route::get('/kemahasiswaan', 'RapbController@kemahasiswaan');
    Route::get('/kerjapraktek', 'RapbController@kerjapraktek');
    Route::get('/tugasakhir', 'RapbController@tugasakhir');
    Route::get('/biayapbma', 'RapbController@biayapbma');
    Route::get('/biayauts', 'RapbController@biayauts');
    Route::get('/biayauas', 'RapbController@biayauas');
    Route::get('/biayawisuda', 'RapbController@biayawisuda');

    //perencanaan
    Route::get('/perencanaan/', 'PerencanaanController@index');

    // Route::get('/perencanaan', 'PerencanaanController@datarencana');
    Route::get('/perencanaan/create','PerencanaanController@create');
    Route::post('/perencanaan/store','PerencanaanController@store');

    Route::get('/perencanaan/edit/{id}','PerencanaanController@edit');
    Route::post('/perencanaan/update','PerencanaanController@update');
  
    Route::get('/perencanaan/hapus/{id}','PerencanaanController@hapus');  
    // Route::get('/destroy','PerencanaanController@destroy');

  

});