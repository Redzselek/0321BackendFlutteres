<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/menus', [ApiController::class, 'Listaz']);
Route::get('/api/menus/search/{query}', [ApiController::class, 'Keres']);
Route::post('/api/menus', [ApiController::class, 'Create']);
