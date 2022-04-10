<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\t_rt;

class t_pendaftaran_rt extends Model
{
    use HasFactory;

    protected $table = 't_pendaftaran_rt';

    protected $fillable = [
        'id_keluarga',
        'id_rt',
        'jumlah_anggota_keluarga',
        'alamat',
        'kk',
        'ktp',
        'is_acc'
    ];

    // public function pendaftaran() {
    //     return $this->hasOne(t_rt::class, 'foreign_key');
    // }
}
