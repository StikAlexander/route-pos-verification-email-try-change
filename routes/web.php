<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\VerificationController;

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

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la verificación de correo electrónico
Route::get('/verification-success', function () {
    return view('auth.verification-success'); // Asegúrate de que esta vista exista
})->name('verification.success');

// Rutas de autenticación con verificación de correo
Auth::routes(['verify' => true]);

// Ruta personalizada para la verificación de correo electrónico
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->middleware(['auth', 'signed'])
    ->name('verification.verify');