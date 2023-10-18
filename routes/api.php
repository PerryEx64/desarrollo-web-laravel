<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GlobalController;
use App\Http\Resources\RegionesDistritosCollection;
use App\Http\Controllers\RegionesDistritosController;
use App\Models\RegionesDistrito;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/regionesDistritos', [\App\Http\Controllers\Api\GlobalController::class, 'regionesDistritos']);
    Route::get('/distritos', [\App\Http\Controllers\Api\GlobalController::class, 'distritos']);
    Route::put('/saveDistritos', [\App\Http\Controllers\Api\GlobalController::class, 'saveDistritos']);
    Route::post('edit-distrito/{id}', [\App\Http\Controllers\DistritoController::class, 'editDistrito']);
    Route::delete('delete-distrito/{id}', [\App\Http\Controllers\DistritoController::class, 'deleteDistrito']);
});

Route::post('/register', [\App\Http\Controllers\Auth\RegisteredUserController::class, 'storeUserApi']);
Route::post('/login', [\App\Http\Controllers\Auth\ConfirmablePasswordController::class, 'login']);





