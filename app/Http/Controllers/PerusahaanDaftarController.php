<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanDaftarController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function perusahaandaftar()
    {

        
        $perusahaandaftar=Perusahaandaftar::all();
        return view('perusahaan', compact('perusahaandaftar'));
    }
}
