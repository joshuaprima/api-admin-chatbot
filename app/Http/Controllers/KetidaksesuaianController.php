<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ketidaksesuaian;

class KetidaksesuaianController extends Controller
{
    public function ketidaksesuaian()
    {
        $ketidaksesuaian=Ketidaksesuaian::all();
        return view('ketidaksesuaian', compact('ketidaksesuaian'));
    }
}
