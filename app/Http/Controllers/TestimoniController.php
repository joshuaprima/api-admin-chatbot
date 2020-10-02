<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function testimoni()
    {
        $testimoni=Testimoni::all();
        return view('testimoni', compact('testimoni'));
    }
}
