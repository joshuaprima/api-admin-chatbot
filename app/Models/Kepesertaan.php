<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepesertaan extends Model
{
    use HasFactory;

    protected $table = 'kepesertaan';
    protected $primaryKey = "kepesertaanID";

    protected $fillable = ['NIK', 'KPJ', 'namaIbu'];
}
