<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,('index')]);
Route::get('/home', [HomeController::class,('index')]);

Route::get('/register', [HomeController::class,('register')])->middleware('guest');
Route::post('/register', [HomeController::class,('reg_data')]);

Route::get('/login', [HomeController::class,('login')])->middleware('guest')->name('login');
Route::post('/login', [HomeController::class,('verify')]);

Route::get('/logout',[HomeController::class,'logout']);


