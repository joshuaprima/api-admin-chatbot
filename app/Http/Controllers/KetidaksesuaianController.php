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

    public function verify(Request $request){
        $verify_id=$request->input('verify_id');

        $data=Ketidaksesuaian::findOrFail($verify_id);
        $data->status = '1';
        $data->save();
        return back();
    }
}
