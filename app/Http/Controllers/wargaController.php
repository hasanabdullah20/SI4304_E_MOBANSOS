<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_pendaftaran_rt;
use App\Models\t_keluarga;

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
}
