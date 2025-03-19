<?php

use App\Http\Controllers\FarmController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvalideController;

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

// Smart Farm
Route::controller(FarmController::class)->group(function(){
    Route::get('/smartfarm', 'index');
});

// RFID
Route::controller(InvalideController::class)->group(function(){
    Route::get('/rfid/invalide', 'index');
    Route::get('/rfid/invalide/create/{id}', 'create');
    Route::post('/rfid/invalide/store', 'store');
    Route::post('/rfid/invalide/delete/{id}', 'delete');
});

