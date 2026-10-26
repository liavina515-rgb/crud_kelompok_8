<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuKantinController;


Route::resource('menus', MenuKantinController::class)->except('show');

Route::get('/menus/{menu}', [MenuKantinController::class, 'show'])
->name('menus.show');
