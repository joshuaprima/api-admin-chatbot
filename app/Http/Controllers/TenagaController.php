<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenagakerjabt;

class TenagaController extends Controller
{
    public function tenaga()
    {
        $tenaga=Tenagakerjabt::all();
        return view('tenaga_terdaftar', compact('tenaga'));
    }
}
