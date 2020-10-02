<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenagakerja;

class KlaimController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function klaim()
    {

        
        $klaim=Tenagakerja::all();
        return view('klaim', compact('klaim'));
    }
}
