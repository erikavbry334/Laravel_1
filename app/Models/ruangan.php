<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nomor_ruangan',
        'Nama_ruangan',
        'Lantai_ruangan'
    ];
}