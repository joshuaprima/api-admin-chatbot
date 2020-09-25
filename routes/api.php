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
