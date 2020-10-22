<?php

namespace App\Http\Controllers;

use App\Mail\BPJSEmailVerify;
use App\Models\Resetakun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use UxWeb\SweetAlert\SweetAlert;

class AkunController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function akun()
    {
        $akun=Resetakun::all();
        return view('akun', compact('akun'));
    }

    public function verify(Request $request){
        $this->validate($request,[
            'verify_id' => 'required',
            'file' => 'nullable',
        ]);

        if($request->hasFile('file') == false){
            alert()->warning('Harap menyertakan file yang dibutuhkan untuk verifikasi!', 'Perhatian');
            return Redirect::back();
        }else{
            $verify_id=$request->input('verify_id');

            $data=Resetakun::findOrFail($verify_id);
            $data->status = '1';
            if($data->save()){
                $filename = date('dmYHis').$request->file('file')->getClientOriginalName();
                $path = 'file';
                $request->file('file')->move($path,$filename);

                Mail::to($data->email)->send(new BPJSEmailVerify($data, $filename));
                alert()->success('Verifikasi berhasil!', 'Sukses');
                return back();
            }
            else{
                return 'Email not send!';
            }
        }
    }
}
