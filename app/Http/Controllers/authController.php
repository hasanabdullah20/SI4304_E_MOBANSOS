<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\t_keluarga;

class authController extends Controller
{
    //
    public function registrasiKeluarga(){
        $password = Hash::make(request('password'));

        t_keluarga::create([
            'nik_keluarga' => request('nik'),
            'email' => request('email'),
            'password' => $password,
            'nama_kepala_keluarga' => request('nama'),
            'nohp' => request('nohp'),
            'alamat' => '',
            'is_validated' => false,
            'id_rt' => 0,
            'id_pendaftaran_rt' => 0
        ]);

        return redirect('/login');
    }

    public function loginKeluarga(){
        $email = request('email');
        $pass = request('password');
        $findUser = t_keluarga::where('email', $email)->get();

        $resultUser = json_decode(json_encode($findUser), true);

        if(count($resultUser) > 0){
            $passData = $resultUser[0]['password'];
            if(Hash::check(request('password'), $passData)){
                if($resultUser[0]['email'] == 'admin@mail.com'){
                    session_start();
                    $_SESSION['nik'] = $resultUser[0]['nik_keluarga'];
                    $_SESSION['email'] = $resultUser[0]['email'];
                    $_SESSION['nama_kepala_keluarga'] = $resultUser[0]['nama_kepala_keluarga'];
                    $_SESSION['role'] = 'admin';
                    return redirect('/admin');
                }else{
                    session_start();
                    $_SESSION['nik'] = $resultUser[0]['nik_keluarga'];
                    $_SESSION['email'] = $resultUser[0]['email'];
                    $_SESSION['nama_kepala_keluarga'] = $resultUser[0]['nama_kepala_keluarga'];
                    $_SESSION['role'] = 'warga';
                    return redirect('/');
                }
            }
        }else{
            return redirect('/?gagal=true');
        }
    }
}
