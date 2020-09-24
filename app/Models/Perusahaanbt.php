<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaanbt extends Model
{
    use HasFactory;

    protected $table = 'perusahaanbt';
    protected $primaryKey = "perusahaanID";

    protected $fillable = ['nama', 'alamat', 'telepon', 'jumlahTk'];

}
