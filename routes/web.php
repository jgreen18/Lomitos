<?php

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
})->name('inicio');

Route::get('prueba', function () {
    return view('prueba');
});

Route::get('Nosotros', function () {
    return view('prueba');
});
Route::get('Staff', function () {
    return view('prueba');
});
Route::get('Servicios', function () {
    return view('prueba');
});
Route::get('Prueba_de_Comportamiento', function () {
    return view('prueba');
});
Route::get('Contacto', function () {
    return view('prueba');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
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
