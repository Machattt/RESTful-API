<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\coffeController;
use App\Http\Controllers\Api\LogoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureTokenisValid;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::group([
    'middleware' => EnsureTokenisValid::class,
    'prefix' => 'auth'
], function ($router) {});

Route::apiResource('coffe', coffeController::class)->middleware('tukang jwt');
route::post('register', RegisterController::class);
route::post('login', LoginController::class);
route::post('logout', LogoutController::class);