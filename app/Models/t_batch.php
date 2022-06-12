<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_batch extends Model
{
    use HasFactory;

    protected $table = 't_batch';

    protected $fillable = [
        'id_batch',
        'nama_batch',
        'deadline',
        'deskripsi',
        'updated_at',
        'created_at'
    ];
}
