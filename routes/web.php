<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\rtController;
use App\Http\Controllers\adminController;

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
    return view('main');
});

Route::get('/home', function () {
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

Route::get('/cariRT', function () {
    return view('rt/cari');
});

Route::post('/cariRT', [rtController::class, 'cariRT']);

Route::get('/joinRT/{idrt}', function () {
    return view('rt/join');
});

Route::post('/registRTWarga', [rtController::class, 'joinRT']);

// Route::get('/pilihRT', [rtController::class, 'pilihRT']);

//ADMIN ROUTE

Route::get('/admin', function () {
    return view('admin/homeAdmin');
});

Route::get('/tambahRT', function () {
    return view('admin/tambahRT');
});

Route::post('/registRT', [adminController::class, 'registRT']);
