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
}