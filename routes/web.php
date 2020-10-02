<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/sipp', 'App\Http\Controllers\SippController@sipp');
Route::get('/akun', 'App\Http\Controllers\AkunController@akun');
Route::get('/kepesertaan', 'App\Http\Controllers\KepesertaanController@kepesertaan');
Route::get('/ketidaksesuaian', 'App\Http\Controllers\KetidaksesuaianController@ketidaksesuaian');
Route::get('/klaim', 'App\Http\Controllers\KlaimController@klaim');
Route::get('/kritik', 'App\Http\Controllers\KritikController@kritik');
Route::get('/perusahaan', 'App\Http\Controllers\PerusahaanController@perusahaan');
Route::get('/saldo', 'App\Http\Controllers\SaldoController@saldo');
Route::get('/tenaga', 'App\Http\Controllers\TenagaController@tenaga');
Route::get('/testimoni', 'App\Http\Controllers\TestimoniController@testimoni');
Route::get('/', 'App\Http\Controllers\IndexController@index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
