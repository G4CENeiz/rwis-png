<?php

use App\Http\Controllers\MediaController;
use App\Http\Controllers\UMKMController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\ContributionDetailController;
use App\Http\Controllers\ContributionTypeController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\EducationLevelController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\FamilyMemberStatusController;
use App\Http\Controllers\GeneralLedgerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\HouseGroupController;
use App\Http\Controllers\IncomeRangeController;
use App\Http\Controllers\MaritalStatusController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PaymentProveController;
use App\Http\Controllers\PaymentStatusController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostMetaController;
use App\Http\Controllers\PostTagController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ReligionController;
use App\Http\Controllers\ResidentController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\BansosController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VillageController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

});

Route::resource('media', \App\Http\Controllers\MediaController::class);
Route::resource('umkm', \App\Http\Controllers\UMKMController::class);
Route::resource('bansos', \App\Http\Controllers\BansosController::class);

Route::group(['prefix' => 'media'], function(){
    Route::get('/create', [MediaController::class, 'create']);   //menampilkan halaman form tambah user
    Route::get('/edit', [MediaController::class, 'edit']);
    Route::get('/delete', [MediaController::class, 'delete']);
    Route::get('/show', [MediaController::class, 'show']);
});

Route::controller(AuthController::class)->group(function () {
    Route::name('auth.')->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'doLogin')->name('login');
        Route::get('/register', 'register')->name('register');
        Route::post('/register', 'doRegister')->name('register');
        Route::get('/logout', 'logout')->name('logout');
    });
    
    Route::name('verification.')->group(function () {
        Route::get('/verify', 'verify')->name('verify');
        Route::post('/resend', 'resend')->name('resend');
    });

    Route::name('password.')->prefix('forget')->group(function () {
        Route::get('/request', 'request')->name('request');
        Route::post('/email', 'email')->name('email');
        Route::get('/reset', 'reset')->name('reset');
        Route::post('/update', 'update')->name('update');
    });
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::get('rw', [HomeController::class, 'dashboard']);
    });
});





    });
});
