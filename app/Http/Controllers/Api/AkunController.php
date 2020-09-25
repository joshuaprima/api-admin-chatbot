<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Akun;
use Validator;
class AkunController extends Controller
{
    public function cekNIK(Request $request){
        $this->validate($request,[
            'NIK' => 'required|string',
        ]);

        if(Akun::where('NIK', $request->NIK)->first() != null){
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

        if(Akun::where([['KPJ', $request->KPJ], ['NIK', $request->NIK]])->first() != null){
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

        if(Akun::where([['namaIbu', $request->namaIbu], ['NIK', $request->NIK], ['KPJ', $request->KPJ]])->first() != null){
            return response()->json([
                'message' => 'Nama ibu terdaftar.',
                'nik' => $request->NIK,
                'kpj' => $request->KPJ,
                'namaIbu' => $request->namaIbu
            ], 201);
        }else{
            return response()->json([
                'message' => 'Maaf, nama ibu belum terdaftar.',
            ], 400);
        }
    }

    public function cekEmail(Request $request){
        $this->validate($request,[
            'NIK' => 'required|string',
            'KPJ' => 'required|string',
            'namaIbu' => 'required|string',
            'email' => 'required|email'
        ]);

        if(Akun::where([['namaIbu', $request->namaIbu], ['NIK', $request->NIK], ['KPJ', $request->KPJ], ['email', $request->email]])->first() != null){
            $digit = rand(1000,9999);
            $data = array_merge(['NIK' => $request->NIK],['KPJ' => $request->KPJ], ['namaIbu' => $request->namaIbu], ['email' => $request->email]);
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
