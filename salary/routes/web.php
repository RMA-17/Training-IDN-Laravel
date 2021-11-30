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

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PenggajianController;
use App\Http\Controllers\TunjanganController;
use App\Penggajian;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Untuk agar orang tidak bisa register, langsung diarahkan ke Login.
Route::match(['GET', 'POST'], '/register', function(){
    return redirect('login');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/tampilan', 'layouts.template');

Route::resource('tunjangan', 'TunjanganController');

Route::resource('jabatan', 'JabatanController');

Route::resource('berita', 'BeritaController');

Route::resource('konten', 'KontenController');

Route::resource('karyawan', 'KaryawanController');

Route::get('penggajian', 'PenggajianController@index');

Route::get('create-gaji/{id}', 'PenggajianController@create_penggajian');

Route::post('post-gaji', 'PenggajianController@store');

Route::get('riwayat-gaji/{id}', 'PenggajianController@detail');