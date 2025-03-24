<?php

use App\Http\Controllers\FarmController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvalideController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\SdmController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Smart Home
Route::controller(HomeController::class)->group(function(){
    Route::get('/smarthome', 'index');
    Route::post('/smarthome/update/{id}', 'update');
});

// ---{Smart Farm}---
Route::controller(FarmController::class)->group(function(){
    Route::get('/smartfarm', 'index');
    Route::post('/smartfarm/update/{id}', 'update');
});

// ---{RFID}---
// Invalide
Route::controller(InvalideController::class)->group(function(){
    Route::get('/rfid/invalide', 'index');
    Route::get('/rfid/invalide/create/{id}', 'create');
    Route::post('/rfid/invalide/store', 'store');
    Route::post('/rfid/invalide/delete/{id}', 'delete');
});

// SDM
Route::controller(SdmController::class)->group(function(){
    Route::get('/rfid/sdm', 'index');
    Route::get('/rfid/sdm/edit/{id}', 'edit');
    Route::post('rfid/sdm/update/{id}', 'update');
});

// Presensi
Route::controller(PresensiController::class)-> group(function(){
    Route::get('/rfid/presensi/', 'index');
    Route::post('/rfid/absen/{uid}', 'capture');
});
