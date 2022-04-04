<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_rt;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    //
    function registRT () {
        $password = Hash::make(request('password'));

        t_rt::create([
            'kota' => request('kota'),
            'kecamatan' => request('kecamatan'),
            'kelurahan' => request('kelurahan'),
            'rt' => request('rt'),
            'rw' => request('rw'),
            'nama_ketua' => request('nama'),
            'email_ketua' => request('email'),
            'password' => $password,
            'jumlah_penduduk' => 0,
        ]);

        return redirect('/admin');
    }
}
