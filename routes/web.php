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
    return view('principal');
});
Route::get('/150cc', function () {
    return view('150cc');
})->name('150');
Route::get('/200cc', function () {
    return view('200cc');
})->name('200');
Route::get('/250cc', function () {
    return view('250cc');
})->name('250');
