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

        $data=Sipp::findOrFail($verify_id);
        $data->status = '1';
        $data->save();
        alert()->success('Verifikasi berhasil!', 'Sukses');
        return back();
    }

    public function delete(Request $request){
        $delete_id = $request->input('delete_id');

        $data = Sipp::findOrFail($delete_id);
        $data->delete();
        alert()->success('Data berhasil terhapus!', 'Sukses');
        return back();
    }
}
