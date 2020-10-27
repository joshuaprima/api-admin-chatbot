<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ketidaksesuaian;
use UxWeb\SweetAlert\SweetAlert;
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
        alert()->success('Verifikasi berhasil!', 'Sukses');
        return back();
    }

    public function delete(Request $request){
        $delete_id = $request->input('delete_id');

        $data = Ketidaksesuaian::findOrFail($delete_id);
        $data->delete();
        alert()->success('Data berhasil terhapus!', 'Sukses');
        return back();
    }
}
