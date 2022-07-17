<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => LaravelLocalization::setLocale() ], function (){



Route::prefix('dashboard')->middleware('guest:admin')->group(function () {

    Route::get('login',[AuthController::class, 'showLogin'])->name('auth.login-show');
    Route::post('login',[AuthController::class, 'login'])->name('auth.login');
});

Route::prefix('dashboard')->middleware('auth:admin') ->group(function () {

        Route::get('/',[DashboardController::class, 'index'])->name('dashboard.index');
        //////////// USER Route//////////////

        Route::resource('users',UserController::class);

        //////////// USER Profile//////////////
        Route::get('logout',[AuthController::class, 'logout'])->name('auth.logout');
       ;

    });
}
);
