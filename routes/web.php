<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| co0ntains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Hello', function () {
    return ('Selamat Datang Brad');
});

Route::get('Salam', function () {
    return ('Belajar dari nol dan mengusahakan untuk berkembang dalam kebaikan');
});

Route::get('/Biodata Mahasiswa', function () {
    return view('test',
    ['Nama'=>"Arief",
     'Kelas'=>"A3",
     'Alamat'=>"Jl. Makam Caringin",
     'Jurusan'=>"Informatika"
    ]
);
});

Route::get('/Biodata Dosen', function () {
    return view('biodatadosen',
    ['Nama'=>"Agin",
     'Jurusan'=>"Informatika"   
    ]
);
});