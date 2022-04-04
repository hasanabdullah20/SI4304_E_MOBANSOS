<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_pendaftaran_rt;
use App\Models\t_rt;
use Illuminate\Support\Facades\Storage;

class rtController extends Controller
{
    //
    public function cariRt(){
        $cariRt = t_rt::where('kota', request('kota'))->get();
        
        return view('rt/cari', ['rt' => $cariRt]);
    }

    public function joinRT(){
        $kk = request('kk')->store('kartu-keluarga');
        $ktp = request('ktp')->store('ktp');

        t_pendaftaran_rt::create([
            'jumlah_anggota_keluarga' => request('jumlah'),
            'alamat' => request('alamat'),
            'kk' => $kk,
            'ktp' => $ktp
        ]);
        
        return redirect('/');
    }
}
