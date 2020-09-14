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


Route::get('/Perpustakaan', function() {
    return view('dataperpus',
    [
        'npmpeminjam' => '0101010101',
        'namapeminjam' => 'Arief Maulana',
        'noseribuku' => '4828',
        'judulbuku' => 'Sirah Nabawiyah',
        'tglpeminjaman' => '01092020',
        'tglkembali' => '31092020',
        'denda' => 'Rp. 250.000'
    ]

    );
});

Route::get('/Tata Usaha', function() {
    return view('datatu',
    [
        'idpetugas' => '123456789',
        'namapetugas' => 'Asep Beling',
        'alamat' => 'Jl. Calipornia tea gening',
        'bagian' => 'Service Computer'
    ]  
    
    );
});

Route::get('/Dosen/{nama}', 'DosenController@index');

Route::get('/formulir', 'DosenController@formulir');
Route::post('/formulir/proses', 'DosenController@proses');

Route::get('/', function () {
    return view('WELCOME');
});

//route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');
