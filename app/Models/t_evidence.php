<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_evidence extends Model
{
    use HasFactory;

    protected $table = 't_evidence';

    protected $fillable = [
        'id_evidence',
        'id_bansos',
        'bukti_terima',
        'updated_at',
        'created_at'
    ];
}
