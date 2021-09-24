<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanHomeController;
use App\Http\Controllers\HalamanAboutController;
use App\Http\Controllers\HalamanContactController;
use App\Http\Controllers\HalamanServicesController;

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

Route::get('/', function(){
    return view('layouts.app');
});
Route::get('/HalamanHome', function(){
    return view('HalamanHome');
});
Route::get('/HalamanServices', function(){
    return view('HalamanServices');
});
Route::get('/HalamanAbout', function(){
    return view('HalamanAbout');
});
Route::get('/HalamanContact', function(){
    return view('HalamanContact');
});