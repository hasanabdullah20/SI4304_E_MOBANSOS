<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_pendaftaran_rt;
use App\Models\t_keluarga;
use App\Models\t_requestBansos;
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

    public function getHistory(){
        session_start();

        $getHistory = t_requestBansos::where('id_keluarga', $_SESSION['id_keluarga'])->get();

        return view('history/historyBantuan', ['dataHistory' => $getHistory]);
    }

    public function getAllBansos(){
        session_start();

        $getBansos = t_requestBansos::where('id_keluarga', $_SESSION['id_keluarga'])->where('status', '!=', 'done')->get();

        return view('evidence/listBansos', ['dataBansos' => $getBansos]);
    }

    public function submitEvidence(Request $request){
        $kk = request('bukti')->store('evidence-warga');

        t_requestBansos::where('id_request', request('idBansos'))->update([
            'status' => 'done',
            'bukti_terima' => $kk
        ]);

        return redirect('/');
    }
}
