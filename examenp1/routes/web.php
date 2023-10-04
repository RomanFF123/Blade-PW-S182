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
//RUTA 1 GET
 Route::get('/', function () {
    return view('welcome');
})->name('welcome'); 
//RUTA 2 GET
Route::get('/vista3', function () {
    return view('Int3');
})->name('vista3'); 
//RUTA 3 VIEW
Route::view('/vista1', 'Int1')->name('vista1');
//RUTA 4 VIEW
Route::view('/vista2', 'Int2')->name('vista2');

