<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupPengguna extends Model
{
    use HasFactory;
    protected $table = 'grup_pengguna';

    protected $fillable = [
        'nama'
    ];
}
