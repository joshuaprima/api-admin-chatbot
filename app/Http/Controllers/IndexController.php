<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaanbt;
use App\Models\Tenagakerjabt;
use App\Models\Ketidaksesuaian;
use App\Models\Sipp;
use App\Models\Tenagakerja;

class IndexController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
    {
    $countperusahaan = Perusahaanbt::all()->count();
    $counttenaga = Tenagakerjabt::all()->count();
    $countketidaksesuaian = Ketidaksesuaian::all()->count();
    $countsipp = Sipp::all()->count();
    $indextable=Tenagakerja::where('kode_tiket', '!=', null)->get();
    return view('index', compact('countperusahaan', 'countketidaksesuaian', 'counttenaga', 'countsipp','indextable'));
    }

}
