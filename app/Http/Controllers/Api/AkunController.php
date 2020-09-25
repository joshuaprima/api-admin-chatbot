<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenagakerja;
use Validator;
class AkunController extends Controller
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
                'message' => 'NIK terdaftar.',
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
            return response()->json([
                'message' => 'Nama ibu terdaftar.',
                'nik' => $request->nik_tk,
                'kpj' => $request->no_kpj,
                'namaIbu' => $request->nama_ibu
            ], 201);
        }else{
            return response()->json([
                'message' => 'Maaf, nama ibu belum terdaftar.',
            ], 400);
        }
    }

    public function cekEmail(Request $request){
        $this->validate($request,[
            'nik_tk' => 'required|string',
            'no_kpj' => 'required|string',
            'nama_ibu' => 'required|string',
            'email' => 'required|email'
        ]);

        if(Tenagakerja::where([['nama_ibu', $request->nama_ibu], ['nik_tk', $request->nik_tk], ['no_kpj', $request->no_kpj], ['email', $request->email]])->first() != null){
            $digit = rand(1000,9999);
            $data = array_merge(['nama_ibu' => $request->nama_ibu], ['nik_tk' => $request->nik_tk], ['no_kpj'=> $request->no_kpj], ['email' => $request->email]);
            return response()->json([
                'message' => 'Data terverifikasi.',
                'data' => $data,
                'digit' => $digit
            ], 201);
        }else{
            return response()->json([
                'message' => 'Maaf, email belum terdaftar.',
            ], 400);
        }
    }
}
