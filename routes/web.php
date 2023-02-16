<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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
    return view('home');
})->name('home');

Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registerValidate'])->name('registerValidate');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('loginValidate');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/rooms', [RoomController::class, 'rooms'])->name('rooms');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/add', [AdminController::class, 'add'])->name('addRoom');
    Route::post('/add', [AdminController::class, 'addRoom'])->name('addRoom');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('editRoom');
});
