<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\professeurController;
use App\Http\Controllers\requetesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome',[AuthController::class,'welcome'])->name('welcome');
Route::get('/',[AuthController::class,'newpage'])->name('new');
Route::get('/sign',[AuthController::class,'sign'])->name('sign');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/listeETD',[AuthController::class,'listeETD'])->name('listeETD');
Route::get('/signprof',[AuthController::class,'signprof'])->name('signprof');
Route::post('/login',[AuthController::class,'listeETD']);
Route::post('/createProf',[professeurController::class,'store'])->name('createProf');


// Route::post('/sign',[AuthController::class,'sign'])->name('sign');



Route::get('/loginprof',[AuthController::class,'loginprof'])->name('loginprof')->middleware('auth');
Route::post('/loginprof',[AuthController::class,'listeETD'])->name('listeREQ')->middleware('auth');

Route::get('/requete',[AuthController::class,'requete'])->name('requete')->middleware('auth');
Route::post('/requete',[AuthController::class,'requete'])->name('requete')->middleware('auth');

Route::put('/requete/{id}',[requetesController::class,'update'])->name('requeteupdate')->middleware('auth');

Route::put('/requete/valider/{id}',[requetesController::class,'valider'])->name('requetevalider')->middleware('auth');
Route::put('/requete/rejeter/{id}',[requetesController::class,'rejeter'])->name('requeterejeter')->middleware('auth');

Route::post('logout',[AuthController::class, 'logout'])->name('logout');




Route::get('/listeREQ',[requetesController::class,'index'])->name('listeREQ')->middleware('auth');


Route::get('/listePROF',[ProfesseurController::class,'index'])->name('listePROF')->middleware('auth');


Route::get('/conversation',[AuthController::class,'conversation'])->name('conversation')->middleware('auth');


Route::get('/listeETD',[EtudiantController::class,'index'])->name('listeETD')->middleware('auth');


// Route::post('/listeETD',[EtudiantController::class,'store'])->name('listeETD');

 Route::resource("Etudiant", EtudiantController::class)->middleware('auth');
//  Route::resource("Professeur",professeurController::class)->middleware('auth');
 Route::resource("Requetes", requetesController::class)->middleware('auth');


 Route::get('deleteEtudiant/{id}',[EtudiantController::class,'delete'])->name('delete')->middleware('auth');
 Route::get('Users',[EtudiantController::class,'Users'])->name('Users');
