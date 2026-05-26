<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'umur',
        'jenis_kelamin',
        'no_hp',
        'email',
        'kategori',
        'status'
    ];
}