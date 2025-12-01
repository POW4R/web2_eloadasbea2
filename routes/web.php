<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChartController;



Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/database', [DatabaseController::class, 'index'])->name('database');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit']);
Route::get('/messages', [MessageController::class, 'index'])->name('messages');
Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.delete');
Route::get('/drivers', [DriverController::class, 'index'])->name('drivers.index');
Route::get('/drivers/create', [DriverController::class, 'create'])->name('drivers.create');
Route::post('/drivers', [DriverController::class, 'store'])->name('drivers.store');
Route::get('/drivers/{id}/edit', [DriverController::class, 'edit'])->name('drivers.edit');
Route::post('/drivers/{id}/update', [DriverController::class, 'update'])->name('drivers.update');
Route::post('/drivers/{id}/delete', [DriverController::class, 'destroy'])->name('drivers.delete');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/chart', [ChartController::class, 'index'])->name('chart');
Route::post('/logout', function() {
    Auth::logout();
    return redirect('/');
});
