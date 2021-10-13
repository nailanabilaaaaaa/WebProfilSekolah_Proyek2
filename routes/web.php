<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuProfilController;
use App\Http\Controllers\MenuDataController;
use App\Http\Controllers\MenuProgramController;
use App\Http\Controllers\MenuGaleriController;
use App\Http\Controllers\MenuBeritaController;
use App\Http\Controllers\MenuContactController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/layouts', function () {
    return view('layouts.app');
});

Route::get('/', function(){
    return view('Welcome');
});

Route::get('/Beranda', function(){
    return view('Beranda');
});

Route::resource('/menuprofil', MenuProfilController::class);
Route::resource('/Profil', ProfilController::class);

Route::resource('/menudata', MenuDataController::class);
Route::resource('/Data', DataController::class);

Route::resource('/menuprogram', MenuProgramController::class);
Route::resource('/Program', ProgramController::class);

Route::resource('/menugaleri', MenuGaleriController::class);
Route::resource('/Galeri', GaleriController::class);

Route::resource('/menuberita', MenuBeritaController::class);
Route::resource('/Berita', BeritaController::class);

Route::resource('/menucontact', MenuContactController::class);
Route::resource('/Contact', ContactController::class);