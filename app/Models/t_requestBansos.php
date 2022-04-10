<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_requestBansos extends Model
{
    use HasFactory;

    protected $table = 't_requestBansos';

    protected $fillable = [
        'id_keluarga',
        'id_rt',
        'tujuan_rt',
        'jenis_bansos',
        'status',
    ];
}
