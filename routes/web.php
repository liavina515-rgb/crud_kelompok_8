<?php

use App\Http\Controllers\MenuKantinController;
use Illuminate\Support\Facades\Route;

Route::resource('/menu',MenuKantinController::class);
