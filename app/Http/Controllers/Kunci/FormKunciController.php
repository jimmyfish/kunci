<?php

namespace App\Http\Controllers\Kunci;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormKunciController extends Controller
{
    public function index()
    {
        return view('kunci.form');
    }
}
