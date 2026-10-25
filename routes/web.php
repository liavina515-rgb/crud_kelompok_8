<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuKantinController;

Route::get('/menus/{kode_menu}', [MenuKantinController::class, 'show'])
->name('menus.show');

Route::resource('menus', MenuKantinController::class);
