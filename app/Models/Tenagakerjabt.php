<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenagakerjabt extends Model
{
    use HasFactory;

    protected $table = 'tenagakerjabt';
    protected $primaryKey = "tenagakerjaID";

    protected $fillable = ['nama', 'alamat', 'telepon', 'jumlahTk'];
}
