<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel PeTIK Jombang Gen-Z";
});

Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama. '<br/>Departemen : '.$divisi;
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/Santri',[SantriController::class, 'dataSantri']
);


