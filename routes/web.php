<?php

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

// Route::get('/cth', function () {
//     return view('contoh');
// });

// Route::fallback(function () {
//     return view('notfound');
// });

// Route::get('mahasiswa/{nama}', function ($nama){
//     echo "ini Halaman Mahasiswa dengan nama $nama";
// });

// Route::get('/hello/hello2/hellolagi', function () {
//     echo "Hello World";
// });

// Route::get('/mahasiswa', function () {
//     $kelas = "is62";
//     $data = ["Erix","Hanif","Herdio","Rahmat","Ihwan","Zik"];

//     //return view('mahasiswa.index')->with('mhs',$data)->with('kls',$kelas);//
//     return view('mahasiswa.index',compact('kelas','data'));
// });

// Route :: get('/mahasiswa', function () {
//     $nama = "Herdio Saputra";
//     $nilai = 99;

//     $nilai2 = [85,70,50,70,35,100];

//     return view('mahasiswa', compact('nama','nilai','nilai2'));
// });

Route :: get('/mahasiswa', function () {
    $data_mhs = ["Abdul","Adha","Aidil","Alif","Asfal"];
    return view('layout.mahasiswa',compact('data_mhs'));
});

Route :: get('/dosen', function () {
    $data_dos = ["Ismanuddin","Mustofa Lutfi","Rita Warni","Ridha Ansari","Dzulgunar M Nasir"];
    return view('layout.dosen',compact('data_dos'));
});

Route :: get('/galeri', function () {
    return view('layout.galeri');
});