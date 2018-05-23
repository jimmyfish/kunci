<?php

namespace App\Http\Controllers\Kunci;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormKunciController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = new \App\Kunci();

            $data->nama_lokasi = $request->nama_lokasi;

            $data->save();
        }
    
        return view('kunci.form');

    }
}
