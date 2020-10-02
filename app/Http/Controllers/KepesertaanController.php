<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenagakerja;

class KepesertaanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function kepesertaan()
    {
        $kepesertaan=Tenagakerja::all();
        return view('kepesertaan', compact('kepesertaan'));
    }
}
