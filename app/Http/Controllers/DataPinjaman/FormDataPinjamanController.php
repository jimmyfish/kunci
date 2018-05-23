<?php

namespace App\Http\Controllers\DataPinjaman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormDataPinjamanController extends Controller
{
    public function index()
    {
        return view('data_pinjaman.form');
    }
}
