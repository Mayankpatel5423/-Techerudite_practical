<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/',[UserController::class,'loginpage']);
Route::get('/registration',[UserController::class,'view']);
Route::get('/admin',[UserController::class,'show']);
Route::POST('/login',[UserController::class,'login'])->name('login');
Route::get('/dashboard',[UserController::class,'dashboard'])->name('dashboard');


Route::post('/userRegistration',[UserController::class,'store'])->name('userRegistration');
Route::post('/adminRegistration',[UserController::class,'store'])->name('adminRegistration');

