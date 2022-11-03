<?php

use App\Http\Controllers\admin\LoginController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function() {

   Route::get('login', [LoginController::class, 'create'])->name('admin.login');
   Route::post('login', [LoginController::class, 'store'])->name('admin.login.store');
});
