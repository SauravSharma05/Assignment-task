<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Buisnesscontroller;
use App\Http\Controllers\Homecontroller;
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

Route::get('/',[Homecontroller::class,'index']);
Route::get('/home',[HomeController::class,'index']);

Route::get('/register',[Authcontroller::class,'index'])->middleware('guest');;
Route::post('/register',[Authcontroller::class,'register']);

Route::get('/login',[Authcontroller::class,'login'])->middleware('guest');;
Route::post('/login',[Authcontroller::class,'validate_log']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/adminhome',[Authcontroller::class,'index'])->middleware(['auth','AdminMiddleware']);

Route::get('/bus_store',[Buisnesscontroller::class,'index']);
Route::post('/bus_store',[Buisnesscontroller::class,'store']);

Route::get('/bus_list',[Buisnesscontroller::class,'show']);




