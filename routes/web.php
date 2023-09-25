<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TerritorioController;
use App\Http\Controllers\DistritoController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\RegionesDistritosController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/territorios', [TerritorioController::class, 'index'])->name('territorios');
    Route::post('/territorios', [TerritorioController::class, 'store'])->name('territorio.store');

    Route::get('/distritos', [DistritoController::class, 'index'])->name('distritos');
    Route::post('/distritos', [DistritoController::class, 'store'])->name('distrito.store');

    Route::get('/regiones', [RegionController::class, 'index'])->name('regiones');
    Route::post('/regiones', [RegionController::class, 'store'])->name('region.store');

    Route::get('/regionesDistritos', [RegionesDistritosController::class, 'index'])->name('regionesDistritos');
    Route::post('/regionesDistritos', [RegionesDistritosController::class, 'store'])->name('regionDistrito.store');
});

require __DIR__.'/auth.php';
