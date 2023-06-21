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

Route::get('/',[AuthController::class,'welcome'])->name('welcome');

Route::get('/sign',[AuthController::class,'sign'])->name('sign');
Route::post('/sign',[AuthController::class,'sign'])->name('sign');



Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login');



Route::get('/signprof',[AuthController::class,'signprof'])->name('signprof');
Route::post('/signprof',[AuthController::class,'signprof'])->name('signprof');

 
Route::get('/loginprof',[AuthController::class,'loginprof'])->name('loginprof');
Route::post('/loginprof',[AuthController::class,'loginprof'])->name('loginprof');



Route::get('/requete',[AuthController::class,'requete'])->name('requete');
Route::post('/requete',[AuthController::class,'requete'])->name('requete');


Route::get('/listeREQ',[AuthController::class,'listeREQ'])->name('listeREQ');


Route::get('/listePROF',[AuthController::class,'listePROF'])->name('listePROF');


Route::get('/conversation',[AuthController::class,'conversation'])->name('conversation');


Route::get('/listeETD',[AuthController::class,'listeETD'])->name('listeETD');


// Route::post('/listeETD',[EtudiantController::class,'store'])->name('listeETD');

 Route::resource("Etudiant", EtudiantController::class);
 Route::resource("Professeur",professeurController::class);
 Route::resource("Requetes", requetesController::class);


 Route::get('deleteEtudiant/{id}',[EtudiantController::class,'delete'])->name('delete');
 Route::get('Users',[EtudiantController::class,'Users'])->name('Users');