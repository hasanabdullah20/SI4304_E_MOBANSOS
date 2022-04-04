<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_pendaftaran_rt extends Model
{
    use HasFactory;

    protected $table = 't_pendaftaran_rt';

    protected $fillable = [
        'jumlah_anggota_keluarga',
        'alamat',
        'kk',
        'ktp'
    ];
}
