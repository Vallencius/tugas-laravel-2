<?php

use App\Http\Controllers\RoomController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookRoomController;
use App\Http\Controllers\NewsController;

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
Route::get('/news', [NewsController::class, 'news'])->name('news');
Route::get('/news/detail/{id}', [NewsController::class, 'newsDetail'])->name('news.detail');
Route::get('/promo', [NewsController::class, 'promo'])->name('promo');
Route::get('/book/{id}', [BookRoomController::class, 'index'])->name('book');
Route::get('/bookList/{id}', [BookRoomController::class, 'bookList'])->name('bookList');
Route::post('/bookRoom', [BookRoomController::class, 'bookRoom'])->name('bookRoom');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/news', [AdminController::class, 'news'])->name('admin.news');
    Route::get('/booking', [AdminController::class, 'booking'])->name('admin.booking');
    Route::get('/book/acc/{id}', [AdminController::class, 'accBook'])->name('admin.bookAcc');
    Route::get('/book/notacc/{id}', [AdminController::class, 'notAccBook'])->name('admin.bookNotAcc');

    Route::get('/add', [AdminController::class, 'add'])->name('addRoom');
    Route::post('/add', [AdminController::class, 'addRoom'])->name('addRoom');
    Route::get('/edit/{id}', [AdminController::class, 'edit'])->name('editRoom');
    Route::post('/edit', [AdminController::class, 'editRoom'])->name('editRoom');
    Route::get('/delete/{id}', [AdminController::class, 'delete'])->name('deleteRoom');
    
    Route::get('/news/add', [AdminController::class, 'addNewsView'])->name('admin.news.add');
    Route::post('/news/add', [AdminController::class, 'addNews'])->name('admin.news.add');
    Route::get('/news/delete/{id}', [AdminController::class, 'deleteNews'])->name('admin.news.delete');
    Route::get('/news/edit/{id}', [AdminController::class, 'editNewsView'])->name('admin.news.edit');
    Route::post('/news/edit', [AdminController::class, 'editNews'])->name('admin.news.edit');
    
    Route::get('/promo/{id}', [AdminController::class, 'promo'])->name('admin.promo');
    Route::post('/promo', [AdminController::class, 'promoSet'])->name('admin.promo.set');
});
