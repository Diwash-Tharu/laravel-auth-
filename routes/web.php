<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Middleware\UserMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home')
->middleware(UserMiddleware::class);

// Route::get ('/admin', function () {
//    return view('admin.auth.login');
// });
Route::get ('/admin', [AdminLoginController::class, 'index']);
Route::post ('/admin', [AdminLoginController::class, 'login'])->name('admin.login');
Route::get ('/admin/home', [AdminHomeController::class, 'index'])->name('admin.dashboard');
