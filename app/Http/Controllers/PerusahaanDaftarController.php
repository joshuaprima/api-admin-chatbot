<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerusahaanDaftarController extends Controller
{
    public function perusahaandaftar()
    {
        $perusahaandaftar=Perusahaandaftar::all();
        return view('perusahaan', compact('perusahaandaftar'));
    }
}
