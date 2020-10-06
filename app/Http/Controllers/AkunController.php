<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenagakerja;

class AkunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function akun()
    {
        $akun=Tenagakerja::all();
        return view('akun', compact('akun'));
    }
}
