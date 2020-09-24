<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saldo extends Model
{
    use HasFactory;

    protected $table = 'saldo';
    protected $primaryKey = "saldoID";

    protected $fillable = ['NIK', 'KPJ', 'namaIbu'];
}
