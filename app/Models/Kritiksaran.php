<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritiksaran extends Model
{
    use HasFactory;

    protected $table = 'kritiksaran';
    protected $primaryKey = "kritikID";

    protected $fillable = ['isi','created_at'];
}
