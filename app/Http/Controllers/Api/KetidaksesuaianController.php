<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ketidaksesuaian;
use Validator;
class KetidaksesuaianController extends Controller
{
    public function postData(Request $request){
        $this->validate($request, [
            'NIK' => 'required|string',
            'KPJ' => 'required|string',
            'email' => 'required|email',
            'nohp' => 'required|string|max:13',
            'alasan' => 'required|string'
        ]);

        $data = new Ketidaksesuaian();
        $data->NIK = $request->NIK;
        $data->KPJ = $request->KPJ;
        $data->email = $request->email;
        $data->nohp = $request->nohp;
        $data->alasan = $request->alasan;

        if($data->save()){
            return response()->json([
                'message' => 'Terima kasih atas laporannya. Laporan kamu akan ditindaklanjuti dan cek email secara berkala.',
                'data' => $data
            ], 201);
        }else{
            return response()->json([
                'message' => 'Data ketidaksesuaian tidak berhasil diinput.',
            ], 400);
        }
    }
}
