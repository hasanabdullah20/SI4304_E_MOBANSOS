<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_requestBansos;
use App\Models\t_keluarga;
use App\Models\t_followup;
use App\Models\t_evidence;

class requestBansos extends Controller
{
    //
    public function requestBansos(){
        session_start();
        $idWarga = $_SESSION['id_keluarga'];

        $requestBansos = t_requestBansos::create([
            'id_keluarga' => $idWarga,
            'id_rt' => request('rt'),
            'id_batch' => request('idbatch'),
            'tujuan_rt' => '',
            'jenis_bansos' => request('jenis'),
            'status' => 'diterima',
            'bukti_terima' => '.jpg'
        ]);

        if($requestBansos){
            return redirect('/');
        }else{
            echo "failed";
        }

    }

    public function accBansosRT(){
        $getAllBansos = t_requestBansos::where('status', '!=', 'selesai')->get();

        // $getUpdateBansos = t_evidence::where('status', 'done')->get();

        return view('adminRT/home', ['dataBansos' => $getAllBansos]);
    }

    public function terimaBansos($idBansos, $status){
        if($status == 'diterima'){
            $updateBansos = t_requestBansos::where('id_request', $idBansos)
                            ->update([
                                'status' => 'dikonfirmasi'
                            ]);
            
            return redirect('/homeRT');
        }else if($status == 'done'){
            $updateBansos = t_requestBansos::where('id_request', $idBansos)
            ->update([
                'status' => 'selesai'
            ]);

            return redirect('/homeRT');
        }
    }

    public function lihatEvidence($idbansos){
        $getAllBansos = t_requestBansos::where('id_request', $idbansos)->get();

        return view('adminRT/lihatEvidence', ['dataBansos' => $getAllBansos]);
    }

    public function verifikasiBansos($idbansos){
        $verifikasiBansos = t_requestBansos::where('id_request', $idbansos)->update([
            'status' => 'terverifikasi'
        ]);

        return redirect('/batchRT');
    }

    public function pengaduan(Request $request){
        $pengaduan = request('pengaduangambar')->store('pengaduan-warga');

        $pengaduan = t_followup::Create([
            'id_request' => request('idbansos'),
            'deskripsi' => request('pengaduan'),
            'gambar_pendukung' => $pengaduan
        ]);

        return redirect('/history');
    }
}