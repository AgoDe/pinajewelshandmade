<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\FrontendController;

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
require 'admin.php';

Route::view('/test', 'shop.show');

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/chisiamo', [FrontendController::class, 'aboutus'])->name('aboutus');
Route::get('/contatti', [FrontendController::class, 'contact'])->name('contact');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
// users routes
Route::middleware('guest')->group(function () {
    Route::get('/registrazione', [RegisterController::class, 'create'])->name('register');
    Route::post('/registrazione', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('loginStore');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
});



