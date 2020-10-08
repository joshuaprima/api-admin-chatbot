<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resetakun extends Model
{
    use HasFactory;

    protected $table = 'resetakun';
    protected $primaryKey = "resetID";

    protected $fillable = ['tkID', 'nik', 'kpj', 'email'];
}
