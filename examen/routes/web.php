<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\NombreController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\InformacionController;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/inicio/{servi?}', [InicioController::class, 'show']);

Route::get('/nombre/{servi?}', [NombreController::class, 'show']);

Route::get('/servicios/{servi?}', [ServiciosController::class, 'show']);

Route::get('/Contactanos/{contac?}', [ContactanosController::class, 'show']);

Route::get('/informacion/{inf?}', [InformacionController::class, 'show']);
