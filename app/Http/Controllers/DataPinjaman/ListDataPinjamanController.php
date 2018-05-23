<?php

namespace App\Http\Controllers\DataPinjaman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListDataPinjamanController extends Controller
{
    public function index()
    {
        $dataPinjaman = \App\DataPinjaman::find(1)->pengguna;

        return dd($dataPinjaman);

        return view('data_pinjaman.list', [
            'data_pinjaman' => $dataPinjaman,
        ]);
    }
}
