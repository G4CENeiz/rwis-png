<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

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
    return view('rw.index');
});


Route::resource('media', \App\Http\Controllers\MediaController::class);

Route::group(['prefix' => 'media'], function(){
    Route::get('/create', [MediaController::class, 'create']);   //menampilkan halaman form tambah user
});
