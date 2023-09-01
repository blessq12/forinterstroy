<?php

use App\Http\Controllers\MainController;
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
    });
});
