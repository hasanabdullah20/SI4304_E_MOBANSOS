<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_rt extends Model
{
    use HasFactory;

    
    protected $table = 't_rt';

    protected $fillable = [
        'kota',
        'kecamatan',
        'kelurahan',
        'rt',
        'rw',
        'nama_ketua',
        'email_ketua',
        'password',
        'jumlah_penduduk'
    ];
}