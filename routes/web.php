<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::get('/', function () {
    return view('dashboard');
});

Route::resource('/contact', ContactController::class);

