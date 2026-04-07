<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'ttl',
        'hp',
        'sekolah',
        'program',
        'ktp',
        'ktportu',
        'bukti',

    ];
}
