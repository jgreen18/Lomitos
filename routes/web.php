<?php

use App\Http\Controllers\ComportamientoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\ServiciosController;
use App\Http\Controllers\StaffController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('inicio');
Route::get('/',HomeController::class)
->name('inicio');

Route::get('prueba', PruebaController::class)
->name('prueba');

Route::get('nosotros', NosotrosController::class)
->name('Nosotros');
   
Route::get('staff', StaffController::class)
->name('Staff');

Route::get('servicios', ServiciosController::class)
->name('Servicios');

Route::get('prueba_de_Comportamiento', ComportamientoController::class)
->name('Prueba_de_Comportamiento');

Route::get('contacto', ContactoController::class)
->name('Contacto');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/prueba', function () {
//         return view('prueba');
//     })->name('prueba');
// });
