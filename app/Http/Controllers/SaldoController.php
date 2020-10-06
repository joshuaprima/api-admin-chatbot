<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenagakerja;

class SaldoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function saldo()
    {

        
        $saldo=Tenagakerja::all();
        return view('saldo', compact('saldo'));
    }
}
