<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListPenggunaController extends Controller
{
    public function index()
    {
        $pengguna = \App\Pengguna::all();

        return view('pengguna.list', [
            'pengguna' => $pengguna,
        ]);
    }
}
