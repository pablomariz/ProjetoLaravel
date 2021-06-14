<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\CarroController;



Route::get('/', [CarroController::class, 'carros']);
