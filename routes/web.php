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
Route::get('/ajouter', [EtudiantController::class, 'addEtudiant']);
Route::post('/ajouter/traitemnt', [EtudiantController::class, 'ajouter_etudiant_traitement']);
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant']);
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement']);
Route::get('/ delete-etudiant/{id}', [EtudiantController::class, 'delete_etudiant']);
