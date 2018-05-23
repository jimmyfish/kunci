<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListPenggunaController extends Controller
{
    public function index()
    {
        return view('pengguna.list');
    }
}
