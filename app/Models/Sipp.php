<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sipp extends Model
{
    use HasFactory;

    protected $table = 'sipp';
    protected $primaryKey = "sippID";

    protected $fillable = ['NPP', 'email', 'namaAR','status'];
}
