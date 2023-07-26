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
    return redirect()->to('/spv');
})->middleware('auth');


// ROUTE SPV
Route::get('/spv', function () {
    return view('spv.user.view' ,[
        'users' => User::all()
    ]);
});
Route::get('/tambah', function () {
    return view('spv.user.tambah');
});

// ROUTE Customer
Route::get('/spv/customer', function () {
    return view('spv.customer.viewCustomers',[
        'customers' => User::all()
    ]);
});
Route::get('/tambahcustomer', function () {
    return view('spv.customer.tambahCustomers');
});

// ROUTE Mechanics
Route::get('/spv/mechanic', function () {
    return view('spv.mechanic.viewMechanic',[
        'mechanics' => User::all()
    ]);
});
Route::get('/tambahmechanic', function () {
    return view('spv.mechanic.tambahMechanic');
});


Route::get('user', [Controller::class, 'index']);



// ROUTE LOGIN & LOGOUT
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');

Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
