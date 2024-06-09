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
use App\Http\Controllers\GovAidController;
use App\Http\Controllers\LevelPermissionController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserLevelController;
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

// Route::prefix('media')->name('media.')->controller(MediaController::class)->group(function () {
//     Route::get('/placeholder', 'placeholder')->name('placeholder');
// });
// Route::resource('media', MediaController::class);

// Route::prefix('umkm')->name('umkm.')->controller(UMKMController::class)->group(function () {
//     Route::get('/placeholder', 'placeholder')->name('placeholder');
// });
// Route::resource('umkm', UMKMController::class);

// Route::prefix('bansos')->name('bansos.')->controller(BansosController::class)->group(function () {
//     Route::get('/placeholder', 'placeholder')->name('placeholder');
// });
// Route::resource('bansos', BansosController::class);

Route::prefix('govassist')->name('govassist.')->controller(GovAidController::class)->group(function () {
    Route::get('/placeholder', 'placeholder')->name('placeholder');
});
Route::resource('govassist', GovAidController::class);

Route::controller(AuthController::class)->prefix('auth')->group(function () {
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

Route::prefix('system')->name('system.')->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::prefix('permission')->name('permission.')->controller(PermissionController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('permission', PermissionController::class);

        Route::prefix('level')->name('level.')->controller(UserLevelController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('level', UserLevelController::class);

        Route::prefix('level-permisision')->name('level-permisision.')->controller(LevelPermissionController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('level-permisision', LevelPermissionController::class);

        Route::prefix('user')->name('user.')->controller(UserController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('user', UserController::class);
    });

    Route::prefix('government')->name('government.')->group(function () {
        Route::prefix('province')->name('province.')->controller(ProvinceController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('province', ProvinceController::class);
    
        Route::prefix('city')->name('city.')->controller(CityController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('city', CityController::class);
    
        Route::prefix('district')->name('district.')->controller(DistrictController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('district', DistrictController::class);
    
        Route::prefix('village')->name('village.')->controller(VillageController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('village', VillageController::class);
    });
});

Route::prefix('resident')->name('resident.')->group(function () {
    Route::prefix('religion')->name('religion.')->controller(ReligionController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('religion', ReligionController::class);

    Route::prefix('income')->name('income.')->controller(IncomeRangeController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('income', IncomeRangeController::class);

    Route::prefix('education')->name('education.')->controller(EducationLevelController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('education', EducationLevelController::class);

    Route::prefix('profession')->name('profession.')->controller(ProfessionController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('profession', ProfessionController::class);

    Route::prefix('family')->name('family.')->controller(FamilyController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('family', FamilyController::class);

    Route::prefix('family')->name('family.')->group(function () {
        Route::prefix('member')->name('member.')->controller(FamilyMemberStatusController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('member', FamilyMemberStatusController::class);
    });

    Route::prefix('marriage')->name('marriage.')->controller(MaritalStatusController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('marriage', MaritalStatusController::class);

    Route::prefix('house')->name('house.')->controller(HouseController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('house', HouseController::class);

    Route::prefix('house')->name('house.')->group(function () {
        Route::prefix('group')->name('group.')->controller(HouseGroupController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('group', HouseGroupController::class);
    });

    Route::prefix('information')->name('information.')->controller(ResidentController::class)->group(function () {
        //Nambah Function Disini ya MEK!1!1
        Route::post('/list', 'list')->name('list');
        Route::get('/{id}', 'show')->name('show');
    });
    Route::resource('information', ResidentController::class);
});

Route::prefix('administration')->name('administration.')->group(function () {
    Route::prefix('ledger')->name('ledger.')->controller(GeneralLedgerController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('ledger', GeneralLedgerController::class);

    Route::prefix('payement')->name('payement.')->controller(PaymentController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('payement', PaymentController::class);

    Route::prefix('payement')->name('payement.')->group(function () {
        Route::prefix('method')->name('method.')->controller(PaymentMethodController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('method', PaymentMethodController::class);

        Route::prefix('status')->name('status.')->controller(PaymentStatusController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('status', PaymentStatusController::class);

        Route::prefix('prove')->name('prove.')->controller(PaymentProveController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('prove', PaymentProveController::class);
    });

    Route::prefix('contribution')->name('contribution.')->controller(ContributionController::class)->group(function () {
        Route::get('/list', 'list')->name('list');
    });
    Route::resource('contribution', ContributionController::class);

    Route::prefix('contribution')->name('contribution.')->group(function () {
        Route::prefix('type')->name('type.')->controller(ContributionTypeController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('type', ContributionTypeController::class);

        Route::prefix('detail')->name('detail.')->controller(ContributionDetailController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('detail', ContributionDetailController::class);
    });
});

Route::prefix('media')->name('media.')->group(function () {
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('category', CategoryController::class);

    Route::prefix('tag')->name('tag.')->controller(TagController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('tag', TagController::class);

    Route::prefix('post')->name('post.')->controller(PostController::class)->group(function () {
        Route::get('/placeholder', 'placeholder')->name('placeholder');
    });
    Route::resource('post', PostController::class);

    Route::prefix('post')->name('post.')->group(function () {
        Route::prefix('comment')->name('comment.')->controller(PostCommentController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('comment', PostCommentController::class);

        Route::prefix('meta')->name('meta.')->controller(PostMetaController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('meta', PostMetaController::class);

        Route::prefix('category')->name('category.')->controller(PostCategoryController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('category', PostCategoryController::class);

        Route::prefix('tag')->name('tag.')->controller(PostTagController::class)->group(function () {
            Route::get('/placeholder', 'placeholder')->name('placeholder');
        });
        Route::resource('tag', PostTagController::class);
    });
});