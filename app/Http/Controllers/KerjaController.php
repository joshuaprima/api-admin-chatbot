<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerjaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function kerja()
    {


        
        $kerja=Kerja::all();
        return view('tenaga_terdaftar', compact('tenaga'));
    }
}
