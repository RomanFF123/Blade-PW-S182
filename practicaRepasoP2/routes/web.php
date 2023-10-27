<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bibliotecaController;
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

/*
Route::controller(bibliotecaController::class)->group(function(){
    Route::get('/','metodoInicio' )->name('RutaInicio');
    Route::get('/formulario','metodoFormulario')->name('RutaFormulario');
    Route::post('/guardarRecuerdo','metodoFormulario')->name('RutaFormulario');
}
); */
Route::get('/formulario',[bibliotecaController::class,'metodoFormulario'] )->name('RutaFormulario');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
