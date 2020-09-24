<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketidaksesuaian extends Model
{
    use HasFactory;

    protected $table = 'ketidaksesuaian';
    protected $primaryKey = "ketidaksesuaianID";

    protected $fillable = ['NIK', 'KPJ', 'email', 'nohp', 'alasan'];
}
