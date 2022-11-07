<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\BackendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::group(['prefix' => 'admin'], function() {

   Route::get('login', [LoginController::class, 'create'])->name('admin.login');
   Route::post('login', [LoginController::class, 'store'])->name('admin.login.store');


   Route::middleware('auth:admin')->group(callback: function() {

       Route::post('/logout', [LoginController::class, 'destroy'])->name('admin.logout');

       Route::get('/dashboard', [BackendController::class, 'dashboard'])->name('admin.dashboard');

       Route::resource('product', ProductController::class);
       Route::resource('category', CategoryController::class);

   });
});
