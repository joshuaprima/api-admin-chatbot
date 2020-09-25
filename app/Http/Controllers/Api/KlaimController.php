<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tenagakerja;
use Illuminate\Http\Request;
use Validator;

class KlaimController extends Controller
{
    public function cekNIK(Request $request){
        $this->validate($request,[
            'nik_tk' => 'required|string',
        ]);

        if(Tenagakerja::where('nik_tk', $request->nik_tk)->first() != null){
            return response()->json([
                'message' => 'NIK terdaftar.',
                'nik' => $request->nik_tk
            ], 201);
        }else{
            return response()->json([
                'message' => 'Maaf, Nomor NIK tidak terdaftar.',
            ], 400);
        }
    }

    public function cekKPJ(Request $request){
        $this->validate($request,[
            'nik_tk' => 'required|string',
            'no_kpj' => 'required|string',
        ]);

        if(Tenagakerja::where([['no_kpj', $request->no_kpj], ['nik_tk', $request->nik_tk]])->first() != null){
            return response()->json([
                'message' => 'Nomor KPJ terdaftar.',
                'nik' => $request->nik_tk,
                'kpj' => $request->no_kpj
            ], 201);
        }else{
            return response()->json([
                'message' => 'Maaf, Nomor KPJ tidak terdaftar.',
            ], 400);
        }
    }

    public function cekIbu(Request $request){
        $this->validate($request,[
            'nik_tk' => 'required|string',
            'no_kpj' => 'required|string',
            'nama_ibu' => 'required|string',
        ]);

        if(Tenagakerja::where([['nama_ibu', $request->nama_ibu], ['nik_tk', $request->nik_tk], ['no_kpj', $request->no_kpj]])->first() != null){
            $data = Tenagakerja::where([
                ['nik_tk', '=', $request->nik_tk],
                ['no_kpj', '=', $request->no_kpj],
                ['nama_ibu', '=', $request->nama_ibu]
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
