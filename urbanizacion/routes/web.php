<?php

use App\Http\Controllers\ContratoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/loginprueba',function (){
    return view('newlogin/login.blade.php');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pagos/index',[PagoController::class, 'index'])->name('pago.index')->middleware('auth'); 
Route::get('users/index',[UserController::class, 'index'])->name('clients.index')->middleware('auth'); 


Route::get('/contrato/index',[ContratoController::class, 'index'])->name('contrato.index')->middleware('auth'); 
Route::get('/contrato/create',[ContratoController::class, 'create'])->name('contrato.create'); 
Route::post('/contrato/store',[ContratoController::class, 'store'])->name('contrato.store')->middleware('auth'); 


//post solo se ocupa para cuando creamos CREATE o cuando actualizamos