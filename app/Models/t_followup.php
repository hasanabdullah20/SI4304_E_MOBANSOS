<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_followup extends Model
{
    use HasFactory;

    protected $table = 't_followup';

    protected $fillable = [
        'id_followup',
        'id_request',
        'deskripsi',
        'gambar_pendukung',
        'updated_at',
        'created_at'
    ];
}
