<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenagakerja extends Model
{
    use HasFactory;

    protected $table = 'tenagakerja';

    protected $fillable = ['kode_tk', 'no_kpj', 'status_kpj', 'no_npp', 'kode_cabang', 'nama_tk', 'nik_tk', 'nama_ibu', 'blth_aktif', 'blth_nonaktif',
        'saldo', 'no_hp', 'email', 'no_rekening', 'bank_rekening', 'klaim', 'status_klaim', 'ket_klaim', 'kode_tiket'];
}
