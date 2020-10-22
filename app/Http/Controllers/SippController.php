<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sipp;
use UxWeb\SweetAlert\SweetAlert;

class SippController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sipp()
    {
        $sipp=Sipp::all();
        return view('akun_sipp', compact('sipp'));
    }

    public function verify(Request $request){
        $verify_id=$request->input('verify_id');

        $sipp=Sipp::findOrFail($verify_id);
        $sipp->status = '1';
        $sipp->save();
        alert()->success('Verifikasi berhasil!', 'Sukses');
        return back();
    }
}
