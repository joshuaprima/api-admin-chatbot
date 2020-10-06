<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaanbt;

class PerusahaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function perusahaan()
    {

        
        $perusahaan=Perusahaanbt::all();
        return view('perusahaan_terdaftar', compact('perusahaan'));
    }
}
