<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tenagakerjabt;
use Validator;
class TenagakerjabtController extends Controller
{
    public function postData(Request $request){
        $this->validate($request, [
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
            'jumlahTk' => 'required|integer'
        ]);

        $data = new Tenagakerjabt();
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->telepon = $request->telepon;
        $data->jumlahTk = $request->jumlahTk;

        if($data->save()){
            return response()->json([
                'message' => 'Terima kasih atas laporannya. Laporan kamu akan ditindaklanjuti.',
                'data' => $data
            ], 201);
        }else{
            return response()->json([
                'message' => 'Data tenaga kerja tidak berhasil diinput.',
            ], 400);
        }
    }
}
