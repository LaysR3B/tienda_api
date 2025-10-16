<?php

use Illuminate\Support\Facades\Route; // Asegúrate de que esta línea esté presente
use App\Http\Controllers\Api\ProductController;

Route::apiResource('products', ProductController::class);
