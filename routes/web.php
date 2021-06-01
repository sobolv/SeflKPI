<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\LandingController::class, 'load']);

Route::get('/landing', [\App\Http\Controllers\LandingController::class, 'load']);

Route::get('/portfolio', [\App\Http\Controllers\PortfolioController::class, 'load']);

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/test', [\App\Http\Controllers\LandingController::class, 'load_t']);

Route::get('/partners', [\App\Http\Controllers\PartnersController::class, 'load']);

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'load_all']);

Route::get('/news/{id}', [\App\Http\Controllers\NewsController::class, 'load'])->name("one_news");

Route::post('/news/{id}', [\App\Http\Controllers\NewsController::class, 'add_com']);

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'load'])->name("about");

Route::post('/about', [\App\Http\Controllers\AboutController::class, 'add']);

