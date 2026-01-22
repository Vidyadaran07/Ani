<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthCheck;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index']);

Route::get('login',[AuthController::class,'login']);
Route::get('signup',[AuthController::class,'signup']);


