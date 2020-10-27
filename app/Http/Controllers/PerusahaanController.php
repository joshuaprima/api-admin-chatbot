<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaanbt;
use UxWeb\SweetAlert\SweetAlert;

class PerusahaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function perusahaan()
    {
        $perusahaan=Perusahaanbt::all();
        return view('perusahaan_terdaftar', compact('perusahaan'));
    }

    public function verify(Request $request){
        $verify_id=$request->input('verify_id');

        $data=Perusahaanbt::findOrFail($verify_id);
        $data->status = '1';
        $data->save();
        alert()->success('Verifikasi berhasil!', 'Sukses');
        return back();
    }

    public function delete(Request $request){
        $delete_id = $request->input('delete_id');

        $data = Perusahaanbt::findOrFail($delete_id);
        $data->delete();
        alert()->success('Data berhasil terhapus!', 'Sukses');
        return back();
    }
}
