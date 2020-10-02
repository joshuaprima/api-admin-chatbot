<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaanbt;
use App\Models\Tenagakerjabt;
use App\Models\Ketidaksesuaian;
use App\Models\Sipp;

class IndexController extends Controller
{
    public function index ()
    {
    $countperusahaan = Perusahaanbt::all()->count();
    $counttenaga = Tenagakerjabt::all()->count();
    $countketidaksesuaian = Ketidaksesuaian::all()->count();
    $countsipp = Sipp::all()->count();
    return view('index', compact('countperusahaan', 'countketidaksesuaian', 'counttenaga', 'countsipp'));
    }
}
