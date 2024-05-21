<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\UMKMController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RwController;




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
    return view('home.index');
});

Route::resource('media', \App\Http\Controllers\MediaController::class);
Route::resource('umkm', \App\Http\Controllers\UMKMController::class);

Route::group(['prefix' => 'media'], function(){
    Route::get('/create', [MediaController::class, 'create']);   //menampilkan halaman form tambah user
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');






Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::get('rw', [HomeController::class, 'index']);
    });
});
