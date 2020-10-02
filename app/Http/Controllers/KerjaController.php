<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerjaController extends Controller
{
    public function kerja()
    {
        $kerja=Kerja::all();
        return view('tenaga_terdaftar', compact('tenaga'));
    }
}
