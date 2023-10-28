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


/*

Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/formulario',[bibliotecaController::class,'metodoFormulario'] )->name('RutaFormulario');
Route::get('/',[bibliotecaController::class,'metodoInicio'] )->name('RutaInicio');
Route::post('/registrar',[bibliotecaController::class,'metodoRegistrar'] )->name('RutaRegistrar');