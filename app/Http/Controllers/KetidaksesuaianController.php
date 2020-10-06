<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ketidaksesuaian;

class KetidaksesuaianController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function ketidaksesuaian()
    {

        
        $ketidaksesuaian=Ketidaksesuaian::all();
        return view('ketidaksesuaian', compact('ketidaksesuaian'));
    }
}
