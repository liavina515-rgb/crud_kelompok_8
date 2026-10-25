<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuKantinController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('menus', MenuKantinController::class);
