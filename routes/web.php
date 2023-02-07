<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CitaController;
use App\Models\Cliente;
use App\Models\Cita;

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
    $clientes = Cliente::paginate();
    return view('cliente.index', compact('clientes'));
});
Route::get('/calendar', function () {
    $citas = Cita::paginate();
    return view('calendar', compact('citas'));
});

Route::resource('cliente', ClienteController::class);
Route::resource('mascota', MascotaController::class);
Route::resource('cita', CitaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
