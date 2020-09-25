<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';

    protected $fillable = ['kode_npp', 'no_npp', 'nama_npp', 'alamat', 'email', 'no_telp', 'no_hp', 'status_npp', 'blth_aktif', 'blth_nonaktif', 'jumlah_tk_terakhir'];
}
