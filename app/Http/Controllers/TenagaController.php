<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenagakerjabt;
use UxWeb\SweetAlert\SweetAlert;

class TenagaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tenaga()
    {
        $tenaga=Tenagakerjabt::all();
        return view('tenaga_terdaftar', compact('tenaga'));
    }

    public function verify(Request $request){
        $verify_id=$request->input('verify_id');

        $data=Tenagakerjabt::findOrFail($verify_id);
        $data->status = '1';
        $data->save();
        alert()->success('Verifikasi berhasil!', 'Sukses');
        return back();
    }

    public function delete(Request $request){
        $delete_id = $request->input('delete_id');

        $data = Tenagakerjabt::findOrFail($delete_id);
        $data->delete();
        alert()->success('Data berhasil terhapus!', 'Sukses');
        return back();
    }
}
