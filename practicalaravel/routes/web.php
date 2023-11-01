<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\diarioController;

Route::get('/',[diarioController::class,'metodoInicio'] )->name('RutaInicio');
Route::get('/recuerdos',[diarioController::class,'metodoRecuerdos'] )->name('RutaRecuerdos');
Route::get('/formulario',[diarioController::class,'metodoFormulario'] )->name('RutaFormulario');
Route::post('/guardarRecuerdo',[diarioController::class,'metodoGuardar'] )->name('guardar');

/*  
Route::controller(diarioController::class)->group(function(){
    Route::get('/','metodoInicio' )->name('RutaInicio');
    Route::get('/recuerdos','metodoRecuerdos')->name('RutaRecuerdos');
    Route::get('/formulario','metodoFormulario')->name('RutaFormulario');

    Route::post('/guardarRecuerdo','metodoFormulario')->name('RutaFormulario');
}
);
*/
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
/*
Route::view('/', 'welcome')->name('RutaInicio');
Route::view('/formulario', 'formulario')->name('RutaFormulario');
Route::view('/recuerdos', 'recuerdos')->name('RutaRecuerdos');
*/    

