<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GlobalController;
use App\Http\Resources\RegionesDistritosCollection;
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

Route::get('/get-regionesDistritos', [GlobalController::Class, 'regionesDistritos'])->name('prueba');
Route::put('/save-distritos', [\App\Http\Controllers\DistritoController::class, 'store']);
Route::post('edit-distrito/{id}', [\App\Http\Controllers\DistritoController::class, 'editDistrito']);
Route::delete('delete-distrito/{id}', [\App\Http\Controllers\DistritoController::class, 'deleteDistrito']);



