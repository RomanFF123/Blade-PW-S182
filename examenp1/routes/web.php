<?php

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
//RUTA 1
 Route::get('/', function () {
    return view('welcome');
})->name('welcome'); 

Route::get('/vista3', function () {
    return view('Int3');
})->name('vista3'); 

Route::view('/vista1', 'Int1')->name('vista1');
Route::view('/vista2', 'Int2')->name('vista2');

