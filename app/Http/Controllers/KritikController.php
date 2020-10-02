<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kritiksaran;

class KritikController extends Controller
{
    public function kritik()
    {
        $kritik=Kritiksaran::all();
        return view('kritik', compact('kritik'));
    }
}
