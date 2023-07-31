<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->to(route('service.index'));
})->middleware('auth');

// ROUTE LOGIN & LOGOUT
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');
});
Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout')->middleware('auth');

Route::middleware(['auth'])->group(function () {

    // ROUTE CUSTOMER
    Route::resource('customer', CustomerController::class);

    // ROUTE CUSTOMER
    Route::resource('vehicle', VehicleController::class);

    // ROUTE SERVICE
    Route::resource('service', ServiceController::class);

    Route::middleware('isSupervisor')->group(function () {

        // ROUTE MECHANIC
        Route::resource('mechanic', MechanicController::class);

        // ROUTE GROUP USERS ( SPV / ADMIN )
        Route::prefix('users')->group(function () {

            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::get('create', [UserController::class, 'create'])->name('users.create');
            Route::post('create', [UserController::class, 'store'])->name('users.store');

            Route::get('edit/{user}', [UserController::class, 'edit'])->name('users.edit');
            Route::put('edit/{user}', [UserController::class, 'update'])->name('users.update');
            Route::delete('delete/{user}', [UserController::class, 'destroy'])->name('users.delete');
        });
    });
});
