<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\BPJSEmailSipp;
use Illuminate\Http\Request;
use App\Models\Sipp;
use Illuminate\Support\Facades\Mail;
use Validator;
class SippController extends Controller
{
    public function postData(Request $request){
        $this->validate($request, [
            'NPP' => 'required|string',
            'email' => 'required|email',
            'namaAR' => 'required|string'
        ]);

        $data = new Sipp();
        $data->NPP = $request->NPP;
        $data->email = $request->email;
        $data->namaAR = $request->namaAR;

        if($data->save()){
            Mail::to($request->email)->send(new BPJSEmailSipp($data));

            return response()->json([
                'message' => 'Terima kasih atas laporannya. Laporan kamu akan ditindaklanjuti dan cek email secara berkala.',
                'data' => $data
            ], 201);
        }else{
            return response()->json([
                'message' => 'Data SIPP tidak berhasil diinput.',
            ], 400);
        }
    }
}
