<?php

namespace App\Http\Controllers;

use App\Models\Resetakun;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function akun()
    {
        $akun=Resetakun::all();
        return view('akun', compact('akun'));
    }
}
