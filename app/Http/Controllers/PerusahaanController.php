<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaanbt;

class PerusahaanController extends Controller
{
    public function perusahaan()
    {
        $perusahaan=Perusahaanbt::all();
        return view('perusahaan_terdaftar', compact('perusahaan'));
    }
}
