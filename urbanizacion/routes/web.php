<?php

use App\Http\Controllers\ContratoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ManzanaController;
use App\Http\Controllers\MoraController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CuotaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\TelefonoPersonaController;
use App\Http\Controllers\TerrenoController;
use App\Http\Controllers\VendeController;
use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\ReservaController;
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
Route::get('pagos/create',[PagoController::class,'create'])->name('pago.create')->middleware('auth');

Route::get('user/index',[UserController::class, 'index'])->name('user.index')->middleware('auth');
Route::get('user/create',[UserController::class,'create'])->name('user.create')->middleware('auth');
Route::post('user/store',[UserController::class, 'store'])->name('user.store')->middleware('auth');

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

Route::get('terreno/index',[TerrenoController::class,'index'])->name('terreno.index')->middleware('auth');
Route::get('terreno/create',[TerrenoController::class,'create'])->name('terreno.create')->middleware('auth');
Route::post('terreno/register',[TerrenoController::class,'store'])->name('terreno.store')->middleware('auth');

Route::get('vende/index',[VendeController::class,'index'])->name('vende.index')->middleware('auth');
Route::get('vende/create',[VendeController::class,'create'])->name('vende.create')->middleware('auth');
Route::post('vende/register',[VendeController::class,'store'])->name('vende.store')->middleware('auth');

Route::get('bitacora/index',[BitacoraController::class,'index'])->name('bitacora.index')->middleware('auth');
Route::get('bitacora/create',[BitacoraController::class,'create'])->name('bitacora.create')->middleware('auth');
Route::post('bitacora/register',[BitacoraController::class,'store'])->name('bitacora.store')->middleware('auth');

Route::get('reserva/index',[ReservaController::class,'index'])->name('reserva.index')->middleware('auth');
Route::get('reserva/create',[ReservaController::class,'create'])->name('reserva.create')->middleware('auth');
Route::post('reserva/register',[ReservaController::class,'store'])->name('reserva.store')->middleware('auth');


//post solo se ocupa para cuando creamos CREATE o cuando actualizamos
