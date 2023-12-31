<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Buisnesscontroller;
use App\Http\Controllers\Homecontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bus_list',[Buisnesscontroller::class,'show']);

Route::post('/register',[Authcontroller::class,'register']);

Route::post('/bus_store',[Buisnesscontroller::class,'store']);
