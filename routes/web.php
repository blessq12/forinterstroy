<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use GuzzleHttp\Middleware;
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

Route::domain(env('APP_URL'))->group(function(){
    Route::controller(MainController::class)->group(function(){
        Route::get('/', 'index')->name('index_page');
        Route::get('contact', 'contact')->name('contact_page');
        Route::get('/catalog' ,'catalog')->name('catalog_page');
        Route::get('/portfoli' ,'portfolio')->name('portfolio_page');
        Route::get('/projects', 'projects');
    });
});

// crm dash
Route::domain('crm.' .env('APP_URL'))->group(function(){
    // crm Routes
    Route::middleware('auth')->group(function(){
        Route::controller(AdminController::class)->group(function(){
            Route::get('/', 'dashboard')->name('dashboard');
            Route::get('/projects', 'projects');
            Route::get('/{category}/all', 'projectCategory');
            Route::get('/slugs', 'slugs');
            Route::get('/{category}/all', 'slugs');
            // logout route
            Route::get('/user/logout', [LoginController::class, 'logoutUser'])->name('crm_logout');
        });
    });
    
    // login&register Methods
    Route::middleware('guest')->group(function(){
        Route::controller(LoginController::class)->group(function(){
            Route::prefix('user')->group(function(){
                Route::get('login', 'login')->name('crm_login');
                Route::post('login', 'loginUser');
                Route::get('register', 'register')->name('crm_register');
                Route::post('register', 'registerUser');
            });
        });
    });
});
