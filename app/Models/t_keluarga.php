<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_keluarga extends Model
{
    use HasFactory;

    protected $table = 't_keluarga';

    protected $fillable = [
        'nik_keluarga',
        'email',
        'password',
        'nama_kepala_keluarga',
        'nohp',
        'alamat',
        'is_validated',
        'id_rt',
        'id_pendaftaran_rt'
    ];
}
