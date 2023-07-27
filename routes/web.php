<?php

use App\Http\Controllers\etudiantController;
use App\Http\Controllers\parcourController;
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
Route::get('/gestion', [parcourController::class, 'gestion']);
Route::get('/layout', [parcourController::class, 'layout']);
Route::get('/accueil', [etudiantController::class, 'accueil'])->name('accueil');
Route::get('/inscription_admin', [etudiantController::class, 'inscriptionadmi'])->name('inscriptionadmi');
Route::post('/inscription_admin', [etudiantController::class, 'registeradmi'])->name('registeradmi');
Route::get('/connection_admin_secretaire', [etudiantController::class, 'connectionadmi'])->name('connectionadmi');
Route::post('/connection_admin_secretaire', [etudiantController::class, 'admilogin'])->name('admilogin');




    Route::get('/listeadmin', [etudiantController::class, 'listeadmin'])->name('listeadmin');
    Route::get('/admin_dashbord', [etudiantController::class, 'gestion'])->name('gestion');
    Route::get('/delete_admin/{id}', [etudiantController::class, 'delete_admin'])->name('delete_admin');
    Route::get('/modifier_admin/{id}', [etudiantController::class, 'modifier_admin'])->name('modifier_admin');
    Route::put('/update_admin{id}', [etudiantController::class, 'update_admin'])->name('update_admin');

    
    Route::get('/inscription_etudiant', [etudiantController::class, 'inscriptionetudiant'])->name('inscriptionetudiant');
    Route::post('/inscription_etudiant', [etudiantController::class, 'register_etudiant'])->name('register_etudiant');
    Route::get('/liste_etudiant', [etudiantController::class, 'liste_etudiant'])->name('liste_etudiant');
    Route::get('/liste_etudiant2', [etudiantController::class, 'liste_etudiant2'])->name('liste_etudiant2');
    Route::get('/delete_etudiant/{id}', [etudiantController::class, 'delete_etudiant'])->name('delete_etudiant');
    Route::get('/delete_etudiant2/{id}', [etudiantController::class, 'delete_etudiant2'])->name('delete_etudiant2');
    Route::get('/modifier_etudiant{id}', [etudiantController::class, 'modifier_etudiant'])->name('modifier_etudiant');
    Route::get('/modifier_etudiant2{id}', [etudiantController::class, 'modifier_etudiant2'])->name('modifier_etudiant2');
    Route::put('/update_etudiant{id}', [etudiantController::class, 'update_etudiant'])->name('update_etudiant');
    Route::get('/carte/{id}', [etudiantController::class, 'carte'])->name('carte');
    
    Route::get('/secretaire_dashbord', [etudiantController::class, 'gestion2'])->name('gestion2');
    Route::get('/register_secretaire', [etudiantController::class, 'secretaire'])->name('secretaire');
    Route::post('/register_secretaire', [etudiantController::class, 'registersecretaire'])->name('registersecretaire');
    Route::get('/listesecretaire', [etudiantController::class, 'listesecretaire'])->name('listesecretaire');
    Route::get('/delete_secretaire/{id}', [etudiantController::class, 'delete_secretaire'])->name('delete_secretaire');
    Route::get('/listesecretaire2', [etudiantController::class, 'listesecretaire2'])->name('listesecretaire2');
    Route::get('/modifier_secretaire{id}', [etudiantController::class, 'modifier_secretaire'])->name('modifier_secretaire');
    Route::put('/update_secretaire{id}', [etudiantController::class, 'update_secretaire'])->name('update_secretaire');
    


    Route::post('/filiere', [parcourController::class, 'createFiliere'])->name('filiere');
    Route::post('/cycle', [parcourController::class, 'createCycle'])->name('cycle');
    Route::post('/niveau', [parcourController::class, 'createNiveau'])->name('niveau');
    Route::post('/semestre', [parcourController::class, 'createSemestre'])->name('semestre');

    Route::get('/logout', [etudiantController::class, 'logout'])->name('logout');

