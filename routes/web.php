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
    return view('lending');
});

Route::get('/lending', function () {
    return view('lending');
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
