<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\RequeteController;  
use App\Http\Controller\LoginEController;
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

Route::post('/loginT',[LoginEController::class,'loginUser'])->name('user.login');

Route::get('/home',[HomeController::class,'index'])->name('home.index');

Route::get('/info',[CategorieController::class,'info'])->name('info.vue');
Route::get('/categorie',[CategorieController::class,'addCat'])->name('cat.add');
Route::post('/categorie',[CategorieController::class,'submitForm'])->name('cat.submit');

Route::get('/registerE',[EmployeController::class,'addE'])->name('e.add');
Route::post('/registerE',[EmployeController::class,'submitE'])->name('e.submit');

Route::get('/loginE',[EmployeController::class,'logE'])->name('e.log');
Route::post('/loginE',[EmployeController::class,'LogSubmitE'])->name('e.logsubmit');

Route::get('/registerT',[EtudiantController::class,'add'])->name('add');
Route::post('/registerT',[EtudiantController::class,'submit'])->name('submit');

Route::get('/loginT',[EtudiantController::class,'log'])->name('log');
Route::post('/loginT',[EtudiantController::class,'LogSubmit'])->name('logsubmit');

Route::get('/requete',[RequeteController::class,'logR'])->name('r.log');
Route::post('/requete',[RequeteController::class,'LogSubmitR'])->name('r.submit');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
