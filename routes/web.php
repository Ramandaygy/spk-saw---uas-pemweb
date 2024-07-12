<?php

use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HitungController;

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

//Auth::routes();
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home', [PageController::class, 'home'])->name('home');//->middleware('auth');
Route::get('/kriteria', [PageController::class, 'index'])->name('kriteria.index');
Route::get('kriteria/{id.kriteria}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::put('kriteria/{id.kriteria}', [KriteriaController::class, 'update'])->name('kriteria.update');
Route::get('/kriteria/create', [KriteriaController::class, 'create'])->name('kriteria.create');
Route::delete('/kriteria/{id.kriteria}', [KriteriaController::class, 'destroy'])->name('kriteria.destroy');
Route::post('/kriteria', [KriteriaController::class, 'store'])->name('kriteria.store');
Route::post('/kriteria/store', [KriteriaController::class, 'store'])->name('kriteria.store');

//app 
Route::group(['middleware' => 'auth'], function(){
    Route::get('/app',[AppController::class,'index']);
    Route::delete('/logout',[AuthController::class,'logout'])->name('logout');


});

//login dan register
Route::group(['middleware' => 'guest'], function(){
    Route::get('/register',[AuthController::class,'register'])->name('register');
    Route::post('/register',[AuthController::class,'registerPost'])->name('register');
    Route::get('/login',[AuthController::class,'login'])->name('login');
    Route::post('/login',[AuthController::class,'loginPost'])->name('login');


});



// Route::get('/alternatif', [PageController::class,'index'])->name('alterntif.index');

Route::get('/alternatif/edit', [AlternatifController::class, 'edit'])->name('alternatif.edit');
Route::put('/alternatif', [AlternatifController::class, 'update'])->name('alternatif.update');

//hitung
Route::get('/hitung', [HitungController::class, 'index'])->name('hitung.index');



//alternatif
Route::resource('alternatif', AlternatifController::class);
Route::resource('alternatif.create', AlternatifController::class);
Route::get('/alternatif/{id}/edit', [AlternatifController::class, 'edit'])->name('alternatif.edit');


//kriteria
Route::resource('kriteria', KriteriaController::class);
Route::resource('kriteria.create', KriteriaController::class);
Route::resource('kriteria.edit', KriteriaController::class);
Route::get('kriteria/{id_kriteria}/edit', [KriteriaController::class, 'edit'])->name('kriteria.edit');
Route::put('kriteria/{id_kriteria}', [KriteriaController::class, 'update'])->name('kriteria.update');


//nilai
Route::post('/nilai', [NilaiController::class, 'index'])->name('nilai.index');
Route::post('/nilai', [NilaiController::class, 'store'])->name('nilai.store');
Route::resource('nilai', NilaiController::class);
Route::resource('nilai.create', NilaiController::class);
Route::resource('nilai.edit', NilaiController::class);

