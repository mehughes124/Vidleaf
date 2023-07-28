<?php

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
    return view('welcome');
});

Route::get('/vidleaf', function () {
    return view('vertical-video-demo');
});

Route::get('/demo2', function () {
    return view('demo2');
});

Route::get('/marketing-lp', function () {
    return view('marketing-lp');
});
