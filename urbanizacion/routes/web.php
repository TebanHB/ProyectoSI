<?php

use App\Http\Controllers\ContratoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ManzanaController;
use App\Http\Controllers\MoraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CuotaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\TelefonoPersonaController;
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


Route::get('manzana/index',[ManzanaController::class,'index'])->name('manzana.index')->middleware('auth');
Route::get('manzana/create',[ManzanaController::class, 'create'])->name('manzana.create');
Route::post('manzana/register',[ManzanaController::class,'store'])->name('manzana.sotre')->middleware('auth');

Route::get('mora/index',[MoraController::class,'index'])->name('mora.index')->middleware('auth');
Route::get('mora/create',[MoraController::class, 'create'])->name('mora.create')->middleware('auth');
Route::post('mora/register',[MoraController::class,'store'])->name('mora.store')->middleware('auth');

Route::get('cuota/index',[CuotaController::class,'index'])->name('cuota.index')->middleware('auth');
Route::get('cuota/create',[CuotaController::class,'create'])->name('cuota.create')->middleware('auth');
Route::post('cuota/register',[MoraController::class,'store'])->name('cuota.store')->middleware('auth');

Route::get('nota/index',[NotaController::class,'index'])->name('nota.index')->middleware('auth');
Route::get('nota/create',[NotaController::class,'create'])->name('nota.create')->middleware('auth');
Route::post('nota/register',[NotaController::class,'store'])->name('nota.store')->middleware('auth');

Route::get('telefono/index',[TelefonoPersonaController::class,'index'])->name('telefonoPersona.index')->middleware('auth');
Route::get('telefono/create',[TelefonoPersonaController::class,'create'])->name('telefonoPersona.create')->middleware('auth');
Route::post('telefono/register',[TelefonoPersonaController::class,'store'])->name('telefonoPersona.store')->middleware('auth');

//post solo se ocupa para cuando creamos CREATE o cuando actualizamos
