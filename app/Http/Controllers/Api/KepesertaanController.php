<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Kepesertaan;

class KepesertaanController extends Controller
{
    public function cekNIK(Request $request){
        $this->validate($request,[
            'NIK' => 'required|string',
        ]);

        if(Kepesertaan::where('NIK', $request->NIK)->first() != null){
            return response()->json([
                'message' => 'NIK terdaftar.',
                'nik' => $request->NIK
            ], 201);
        }else{
            return response()->json([
                'message' => 'Maaf, Nomor NIK tidak terdaftar.',
            ], 400);
        }
    }

    public function cekKPJ(Request $request){
        $this->validate($request,[
            'NIK' => 'required|string',
            'KPJ' => 'required|string',
        ]);

        if(Kepesertaan::where([['KPJ', $request->KPJ], ['NIK', $request->NIK]])->first() != null){
            return response()->json([
                'message' => 'NIK terdaftar.',
                'nik' => $request->NIK,
                'kpj' => $request->KPJ
            ], 201);
        }else{
            return response()->json([
                'message' => 'Maaf, Nomor KPJ tidak terdaftar.',
            ], 400);
        }
    }

    public function cekIbu(Request $request){
        $this->validate($request,[
            'NIK' => 'required|string',
            'KPJ' => 'required|string',
            'namaIbu' => 'required|string',
        ]);

        if(Kepesertaan::where([['namaIbu', $request->namaIbu], ['NIK', $request->NIK], ['KPJ', $request->KPJ]])->first() != null){
            $data = Kepesertaan::where([
                ['NIK', '=', $request->NIK],
                ['KPJ', '=', $request->KPJ],
                ['namaIbu', '=', $request->namaIbu]
            ])->get();

            return response()->json([
                'message' => 'Status berhasil didapatkan.',
                'data' => $data
            ], 201);
        }else{
            return response()->json([
                'message' => 'Maaf, status belum bisa didapat.',
            ], 400);
        }
    }
}
