<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klaim extends Model
{
    use HasFactory;

    protected $table = 'klaim';
    protected $primaryKey = "klaimID";

    protected $fillable = ['NIK', 'KPJ', 'namaIbu', 'status'];
}
