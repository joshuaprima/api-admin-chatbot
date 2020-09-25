<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kritiksaran;
use Validator;
class KritikController extends Controller
{
    public function postIsi(Request $request){
        $this->validate($request, [
           'isi' => 'required|string'
        ]);

        if($request->isi == null){
            return response()->json([
                'message' => 'Tolong isi kritik dan saran',
            ], 400);
        }else{
            $data = new Kritiksaran();
            $data->isi = $request->isi;
            if($data->save()){
                return response()->json([
                    'message' => 'Terimakasih atas kritik dan saran anda.',
                    'data' => $data
                ], 201);
            }else{
                return response()->json([
                    'message' => 'Kritik dan saran tidak berhasil disimpan.',
                ], 400);
            }
        }
    }
}
