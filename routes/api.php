<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('klaim-nik', 'App\Http\Controllers\Api\KlaimController@cekNIK');
Route::get('klaim-kpj', 'App\Http\Controllers\Api\KlaimController@cekKPJ');
Route::get('klaim-status', 'App\Http\Controllers\Api\KlaimController@cekIbu');
Route::get('kepesertaan-nik', 'App\Http\Controllers\Api\KepesertaanController@cekNIK');
Route::get('kepesertaan-kpj', 'App\Http\Controllers\Api\KepesertaanController@cekKPJ');
Route::get('kepesertaan-status', 'App\Http\Controllers\Api\KepesertaanController@cekIbu');
Route::get('saldo-nik', 'App\Http\Controllers\Api\SaldoController@cekNIK');
Route::get('saldo-kpj', 'App\Http\Controllers\Api\SaldoController@cekKPJ');
Route::get('saldo-nilai', 'App\Http\Controllers\Api\SaldoController@cekIbu');
Route::post('kritik', 'App\Http\Controllers\Api\KritikController@postIsi');
Route::post('testimoni', 'App\Http\Controllers\Api\TestimoniController@postIsi');
Route::post('perusahaanbt', 'App\Http\Controllers\Api\PerusahaanbtController@postData');
Route::post('tenagakerjabt', 'App\Http\Controllers\Api\TenagakerjabtController@postData');
