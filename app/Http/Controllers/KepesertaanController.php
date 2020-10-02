<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenagakerja;

class KepesertaanController extends Controller
{
    public function kepesertaan()
    {
        $kepesertaan=Tenagakerja::all();
        return view('kepesertaan', compact('kepesertaan'));
    }
}
