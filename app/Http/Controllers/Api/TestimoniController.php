<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimoni;
use Validator;
class TestimoniController extends Controller
{
    public function postIsi(Request $request){
        $this->validate($request, [
            'isi' => 'required|string'
        ]);

        if($request->isi == null){
            return response()->json([
                'message' => 'Tolong isi testimoni.',
            ], 400);
        }else{
            $data = new Testimoni();
            $data->isi = $request->isi;
            if($data->save()){
                return response()->json([
                    'message' => 'Terimakasih atas testimoni anda.',
                    'data' => $data
                ], 201);
            }else{
                return response()->json([
                    'message' => 'Testimoni tidak berhasil disimpan.',
                ], 400);
            }
        }
    }
}
