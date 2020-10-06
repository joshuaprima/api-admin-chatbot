<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\BPJSEmailReset;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Tenagakerja;
use Validator;
use Illuminate\Support\Facades\Mail;

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

    public function inputEmail(Request $request){
        $this->validate($request,[
            'nik_tk' => 'required|string',
            'no_kpj' => 'required|string',
            'nama_ibu' => 'required|string',
            'email' => 'required|email'
        ]);

        if(Tenagakerja::where([['nama_ibu', $request->nama_ibu], ['nik_tk', $request->nik_tk], ['no_kpj', $request->no_kpj]])->first() != null){
            $digit = 'B-' . Carbon::now()->format('myd') . '-' . rand(1000,9999);
            $dataedit = Tenagakerja::where([['nama_ibu', $request->nama_ibu], ['nik_tk', $request->nik_tk], ['no_kpj', $request->no_kpj]])->first();

            $dataedit->kode_tiket = $digit;
            if($dataedit->save()){
                //Send Email
                Mail::to($request->email)->send(new BPJSEmailReset($dataedit, $digit));

                return response()->json([
                    'message' => 'Data terverifikasi.',
                    'data' => $dataedit,
                    'digit' => $digit,
                    'email' => $request->email
                ], 201);
            }
        }else{
            return response()->json([
                'message' => 'Email tidak terkirim.',
            ], 400);
        }
    }
}
