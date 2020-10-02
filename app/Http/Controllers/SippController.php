<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sipp;

class SippController extends Controller
{
    public function sipp()
    {
        $sipp=Sipp::all();
        return view('akun_sipp', compact('sipp'));
    }
}
