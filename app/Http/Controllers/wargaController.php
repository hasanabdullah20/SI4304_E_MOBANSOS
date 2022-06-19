<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_pendaftaran_rt;
use App\Models\t_keluarga;
use App\Models\t_batch;
use App\Models\t_requestBansos;
use App\Models\t_evidence;

use Illuminate\Support\Facades\Storage;


class wargaController extends Controller
{
    //
    public function getData() {
        session_start();
        $idWarga = $_SESSION['id_keluarga'];
        
        $getDataKeluarga = t_keluarga::where('id_keluarga', $idWarga)->get();

        $getPendaftaranKeluarga = t_pendaftaran_rt::where('id_keluarga', $idWarga)->get();

        return view('warga/formRequest', ['dataWarga' => $getDataKeluarga, 'detailWarga' => $getPendaftaranKeluarga]);
    }

    function getAllBatch(){
        $dataBatch = t_batch::all();

        return view('warga/pilihBansos', ['dataBatch' => $dataBatch]);
    }

    public function getHistory(){
        session_start();

        $getHistory = t_requestBansos::where('id_keluarga', $_SESSION['id_keluarga'])->get();

        return view('history/historyBantuan', ['dataHistory' => $getHistory]);
    }

    public function getAllBansos(){
        session_start();

        $getBansos = t_requestBansos::where('id_keluarga', $_SESSION['id_keluarga'])->where('status', '!=', 'terverifikasi')->get();

        return view('evidence/listBansos', ['dataBansos' => $getBansos]);
    }

    public function submitEvidence(Request $request){
        $kk = request('bukti')->store('evidence-warga');

        t_requestBansos::where('id_request', request('idBansos'))->update([
            'status' => 'done',
            'bukti_terima' => $kk
        ]);

        t_evidence::create([
            'id_bansos' => request('idBansos'),
            'bukti_terima' => $kk
        ]);

        return redirect('/');
    }

    public function getProfilWarga(Request $request){
        session_start();
        $profil = t_keluarga::where('id_keluarga', $_SESSION['id_keluarga'])->get();

        $dataBansos = t_requestBansos::where('id_keluarga', $_SESSION['id_keluarga'])->get();

        return view('warga/profilWarga', ['dataWarga' => $profil, 'dataBansos' => $dataBansos]);
    }

    public function editProfilWarga(Request $request){
        session_start();
        $nik = request('nik');
        $email = request('email');
        $nama = request('nama');
        $nohp = request('nohp');
        $alamat = request('alamat');

        $edit = t_keluarga::where('id_keluarga', $_SESSION['id_keluarga'])->update([
            'nik_keluarga' => $nik,
            'email' => $email,
            'nama_kepala_keluarga' => $nama,
            'nohp' => $nohp,
            'alamat' => $alamat
        ]);

        if($edit){
            return redirect('/profilWarga');
        }
    }
}
