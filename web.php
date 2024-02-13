<?php

use App\Http\Controllers\MahasantriController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route Salam
Route::get('/salam', function(){
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

//Routing dengan Parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi){
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//Menambahkan Route /kabar
Route::get('/kabar', function(){
    return view('kondisi');
});

//Route Data Mahasiswa
//versi1
//Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@dataMahasiswa');

//versi2
Route::get(
'/mahasiswa',
[MahasiswaController::class, 'dataMahasiswa']
);

// Pertemuan 4
//menambahkan view hello
Route::get('/hello', function () {
    return view('p4/hello',['name' => 'Inaya']);
});

//nilai
Route::get('/nilai', function () {
    return view('p4/nilai');
});

// daftar nilai
Route::get('/daftarnilai', function () {
     return view('p4/daftar_nilai'); 
});

// layouts
Route::get('/phpframework', function () {
     return view('p4/layouts.index'); 
});

Route::get(
    '/mahasantri',
    [MahasantriController::class, 'dataMahasantri']
);

