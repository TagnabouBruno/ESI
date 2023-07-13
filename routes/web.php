<?php

use App\Http\Controllers\etudiantController;
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
Route::get('/layout', [etudiantController::class, 'layout']);
Route::get('/accueil', [etudiantController::class, 'accueil'])->name('accueil');
Route::get('/inscriptionadmi', [etudiantController::class, 'inscriptionadmi'])->name('inscriptionadmi');
Route::post('/inscriptionadmi', [etudiantController::class, 'registeradmi'])->name('registeradmi');
Route::get('/connectionadmi', [etudiantController::class, 'connectionadmi'])->name('connectionadmi');
Route::post('/connectionadmi', [etudiantController::class, 'admilogin'])->name('admilogin');
Route::get('/gestion', [etudiantController::class, 'gestion'])->name('gestion');
Route::get('/inscriptionetudiant', [etudiantController::class, 'inscriptionetudiant'])->name('inscriptionetudiant');
Route::get('/inscriptionnewadmi', [etudiantController::class, 'inscriptionnewadmi'])->name('inscriptionnewadmi');