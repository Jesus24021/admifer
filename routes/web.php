<?php

use App\Http\Controllers\RegistrarUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RestablecerContraseñaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/login')->group(function () {
   Route::get('/', [AuthController::class, 'showloginForm'])->name('login');
   Route::post('/', [AuthController::class, 'login']);
   Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('password')->group(function () {
   Route::get('/reset', [RestablecerContraseñaController::class, 'showpasswordForm'])->name('password.reset');
   Route::post('/reset{token}',[RestablecerContraseñaController::class, 'sendResetFormWithToken'])->name('password.reset');
   Route::get('/email', [RestablecerContraseñaController::class, 'sendResetLinkEmail'])->name('password.email');
   Route::post('/reset',[RestablecerContraseñaController::class, 'resetPassword'])->name('password.update');
});

Route::prefix('/register')->group(function () {
    // RUTAS PARA EL CRUD USUARIOS
    Route::get('/', [RegistrarUserController::class, 'create'])->name('register.create');
    Route::get('/get', [RegistrarUserController::class, 'store'])->name('register.store');
    Route::get('/{user}', [RegistrarUserController::class, 'show'])->name('register.show');
    Route::get('/{user}/edit', [RegistrarUserController::class, 'edit'])->name('register.edit');
    Route::put('/{user}', [RegistrarUserController::class, 'update'])->name('register.update');
    Route::delete('/{user}', [RegistrarUserController::class, 'destroy'])->name('register.destroy');
});



