<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\rtController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\wargaController;
use App\Http\Controllers\requestBansos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::post('/loginKeluarga', [authController::class, 'loginKeluarga']);

Route::get('/register', function () {
    return view('auth/register');
});

Route::post('/registerKeluarga', [authController::class, 'registrasiKeluarga']);
Route::get('/logoutKeluarga', [authController::class, 'logoutKeluarga']);

Route::get('/cariRT', function () {
    return view('rt/cari');
});

Route::post('/cariRT', [rtController::class, 'cariRT']);

// Route::get('/joinRT/{idrt}', function () {
//     return view('rt/join');
// });

Route::get('/joinRT/{idrt}', [rtController::class, 'joinRtForm']);

Route::post('/registRTWarga', [rtController::class, 'joinRT']);

// Route::get('/pilihRT', [rtController::class, 'pilihRT']);

Route::get('/requestWarga', [wargaController::class, 'getData']);

Route::post('/submitRequest', [requestBansos::class, 'requestBansos']);

//RT Route
Route::get('/homeRT', [requestBansos::class, 'accBansosRT']);

Route::get('/listJoinRT', [rtController::class, 'getListJoin']);

Route::get('/accJoinRT/{idp}', [rtController::class, 'accJoinRT']);

//ADMIN ROUTE

Route::get('/admin', function () {
    return view('admin/homeAdmin');
});

// Route::get('/admin', [requestBansos::class, 'accBansosRT']);

Route::get('/tambahRT', function () {
    return view('admin/tambahRT');
});

Route::post('/registRT', [adminController::class, 'registRT']);

#fitur History
Route::get('/history', [wargaController::class, 'getHistory']);

Route::get('/profil', function () {
    return view('profil/profil');
});

//bukti evidence form
Route::get('/formevidence', function () {
    return view('evidence/formevidence');
});