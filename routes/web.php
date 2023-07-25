<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Models\User;
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
    return redirect()->to('/test');
})->middleware('auth');

// TESTING
Route::get('/test', function(){
    return view('test', [
        'users' => User::all()
    ]);
});

// ROUTE SPV
Route::get('/spv', function () {
    return view('spv.user.view');
});
Route::get('/tambah', function () {
    return view('spv.user.tambah');
});


Route::get('user', [Controller::class, 'index']);

// ROUTE LOGIN & LOGOUT
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
