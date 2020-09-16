<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiController extends Controller
{
    public function index()
    {
        //mengambil data dari table pegawai
        $pegawai = DB::table('pegawai')->get();

        //mengirim data pegawai ke index
        return view('index', ['pegawai' => $pegawai]);
    }
}