<?php

use App\Http\Controllers\coffeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/coffe', coffeController::class);