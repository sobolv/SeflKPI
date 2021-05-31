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

Route::get('/', function () {
    return view('landing');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/partners', function () {
    return view('partners');
});

Route::get('/partners', [\App\Http\Controllers\PartnersController::class, 'load']);

Route::get('/news', function () {
    return view('news');
});

Route::get('/news/1', function () {
    return view('one_news');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'load']);
Route::post('/about', [\App\Http\Controllers\AboutController::class, 'add']);
