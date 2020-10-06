<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sipp;

class SippController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function sipp()
    {
        $sipp=Sipp::all();
        return view('akun_sipp', compact('sipp'));
    }
}
