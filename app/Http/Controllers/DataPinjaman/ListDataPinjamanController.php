<?php

namespace App\Http\Controllers\DataPinjaman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListDataPinjamanController extends Controller
{
    public function index()
    {
        return view('data_pinjaman.list');
    }
}
