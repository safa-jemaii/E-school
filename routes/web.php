<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

 Route::get('/etudiant', [EtudiantController::class, 'getEtudiant']);

Route::get('/api/etudiants', [EtudiantController::class, 'getEtudiantsAPI']);

Route::get('/ajouter', [EtudiantController::class, 'addEtudiant']);
// Route::post('/api/ajouter/traitemnt', [EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::post('/ajouter-etudiant-traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);



Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
// Route::post('/update-etudiant-traitement', [EtudiantController::class, 'update_etudiant_traitement']);
Route::put('/update-etudiant-traitement', [EtudiantController::class, 'update_etudiant_traitement']);

Route::delete('/delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);

