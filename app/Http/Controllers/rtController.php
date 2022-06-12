<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_pendaftaran_rt;
use App\Models\t_requestBansos;
use App\Models\t_keluarga;
use App\Models\t_batch;
use App\Models\t_rt;
use Illuminate\Support\Facades\Storage;

class rtController extends Controller
{
    //
    public function joinRtForm($idrt){
        return view('rt/join', ['rt' => $idrt]);
    }

    public function cariRt(){
        $cariRt = t_rt::where('kota', request('kota'))->get();
        
        return view('rt/cari', ['rt' => $cariRt]);
    }

    public function joinRT(){
        session_start();
        $kk = request('kk')->store('kartu-keluarga');
        $ktp = request('ktp')->store('ktp');

        t_pendaftaran_rt::create([
            'id_keluarga' => $_SESSION['id_keluarga'],
            'id_rt' => request('rt'),
            'jumlah_anggota_keluarga' => request('jumlah'),
            'alamat' => request('alamat'),
            'kk' => $kk,
            'ktp' => $ktp
        ]);

        t_keluarga::where('id_keluarga', $_SESSION['id_keluarga'])->update([
            'is_validated' => true
        ]);
        
        return redirect('/');
    }

    public function getListJoin(){
        $getData = t_pendaftaran_rt::where('isacc', false || null)->get();

        return view('rt/listJoin', ['listJoin' => $getData]);
    }

    public function accJoinRT($id){
        $joinRT = t_pendaftaran_rt::where('id_pendaftaran_rt', $id)->update([
            'isacc' => true
        ]);

        if($joinRT){
            return redirect('/');
        }
    }

    public function pilihBatch(){
        $dataBatch = t_batch::all();

        return view('adminRT/pilihBatch', ['dataBatch' => $dataBatch]);
    }

    public function lihatRequestBatch($idbatch){
        $dataBatch = t_requestBansos::where('id_batch', $idbatch)->get();

        $batch = t_batch::where('id_batch', $idbatch)->get();

        $keluarga = t_keluarga::where('id_keluarga', $dataBatch[0]->id_keluarga)->get();

        return view('adminRT/lihatBatch', ['dataBatch' => $dataBatch, 'batch' => $batch, 'keluarga' => $keluarga]);
    }
}