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

Route::get('/requestWarga/{idbatch}', [wargaController::class, 'getData']);

Route::post('/submitRequest', [requestBansos::class, 'requestBansos']);

Route::get('/accBansos/{idBansos}/{status}', [requestBansos::class, 'terimaBansos']);

Route::get('/pilihBansos', [wargaController::class, 'getAllBatch']);

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

Route::get('/batchRT', [rtController::class, 'pilihBatch']);

Route::get('/lihatRequest/{idbatch}', [rtController::class, 'lihatRequestBatch']);

Route::get('/profileRT', [rtController::class, 'profilRT']);

Route::post('/registRT', [adminController::class, 'registRT']);

Route::get('/batchAdmin', [adminController::class, 'getAllBatch']);

Route::get('/tambahBatch', function() {
    return view('admin/tambahBatch');
});

Route::post('/submitBatch', [adminController::class, 'tambahBatch']);

#fitur History
Route::get('/history', [wargaController::class, 'getHistory']);

Route::get('/profil', function () {
    return view('profil/profil');
});

Route::Get('/followUp', function () {
    return view('history/followUp');
});

//bukti evidence form
Route::get('/listBansos', [wargaController::class, 'getAllBansos']);

Route::get('/formevidence/{idBansos}', function () {
    return view('evidence/formevidence');
});

Route::post('/submitEvidence', [wargaController::class, 'submitEvidence']);