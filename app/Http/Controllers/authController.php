<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\t_keluarga;
use App\Models\t_rt;

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
        session_start();
        $email = request('email');
        $pass = request('password');
        $findUser = t_keluarga::where('email', $email)->get();
        $findRt = t_rt::where('email_ketua', $email)->get();

        $resultrt = json_decode(json_encode($findRt), true);
        $resultUser = json_decode(json_encode($findUser), true);

        if(count($resultrt) > 0){
            $passData = $resultrt[0]['password'];
            if(Hash::check(request('password'), $passData)){
                $_SESSION['idrt'] = $resultrt[0]['id_rt'];
                $_SESSION['nama'] = $resultrt[0]['nama_ketua'];
                $_SESSION['kelurahan'] = $resultrt[0]['kelurahan'];
                $_SESSION['kecamatan'] = $resultrt[0]['kecamatan'];
                $_SESSION['role'] = 'rt';
                return redirect('/homeRT');
            }
        }else{
            if(count($resultUser) > 0){
                $passData = $resultUser[0]['password'];
                if(Hash::check(request('password'), $passData)){
                    if($resultUser[0]['email'] == 'admin@mail.com'){
                        $_SESSION['nik'] = $resultUser[0]['nik_keluarga'];
                        $_SESSION['email'] = $resultUser[0]['email'];
                        $_SESSION['nama_kepala_keluarga'] = $resultUser[0]['nama_kepala_keluarga'];
                        $_SESSION['role'] = 'admin';
                        return redirect('/admin');
                    }else{
                        // echo($resultUser[0]['nik_keluarga']);
                        // $_SESSION['asd'] = 'hello';
                        $_SESSION["id_keluarga"] = $resultUser[0]['id_keluarga'];
                        $_SESSION["NIK"] = $resultUser[0]['nik_keluarga'];
                        $_SESSION['email'] = $resultUser[0]['email'];
                        $_SESSION['nama_kepala_keluarga'] = $resultUser[0]['nama_kepala_keluarga'];
                        $_SESSION['role'] = 'warga';
                        return redirect('/');
                    }
                }
            }else{
                return redirect('/login');
                echo '<script language="javascript">';
                echo 'alert("Password salah")';
                echo '</script>';
                
            }
        }
    }

    public function logoutKeluarga() {
        session_start();

        session_unset();

        session_destroy();

        return redirect('/login');
    }
}