<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\t_requestBansos;
use App\Models\t_keluarga;

class requestBansos extends Controller
{
    //
    public function requestBansos(){
        session_start();
        $idWarga = $_SESSION['id_keluarga'];

        $requestBansos = t_requestBansos::create([
            'id_keluarga' => $idWarga,
            'id_rt' => request('rt'),
            'tujuan_rt' => '',
            'jenis_bansos' => request('jenis'),
            'status' => 'Request sudah diterima oleh pihak RT'
        ]);

        if($requestBansos){
            return redirect('/');
        }else{
            echo "failed";
        }

    }

    public function accBansosRT(){
        $getAllBansos = t_requestBansos::all();

        return view('adminRT/home', ['dataBansos' => $getAllBansos]);
    }
}
