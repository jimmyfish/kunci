<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormPenggunaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = new \App\Pengguna();

            $data->nama = $request->jeneng;

            $data->save();
        }

        return view('pengguna.form');
    }
}
