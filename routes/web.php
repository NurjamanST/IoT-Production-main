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
Route::get('/house', function () {
    return view('house');
});
Route::get('/farm', function () {
    return view('farm');
});
Route::get('/invalid', function () {
    return view('invalid');
});
Route::get('/sdm', function () {
    return view('sdm');
});
Route::get('/presence', function () {
    return view('presence');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/produkRFID', function () {
    return view('produkRFID');
});