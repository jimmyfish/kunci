<?php

namespace App\Http\Controllers\DataPinjaman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataPinjaman;

class ListDataPinjamanController extends Controller
{
    public function index()
    {
        $dataPinjaman = DataPinjaman::all();

        return view('data_pinjaman.list', [
            'data_pinjaman' => $dataPinjaman,
        ]);
    }
}
