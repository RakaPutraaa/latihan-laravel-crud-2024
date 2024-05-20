<?php

use App\Http\Controllers\Hallo\HalloController;
use App\Http\Controllers\Todo\TodoControlle;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hallo', [HalloController::class, 'index']);

// Route::get('/todo', function () {
//     return view('todo.app');
// });

Route::get('/todo', [TodoControlle::class, 'index']);
Route::post('/todo', [TodoControlle::class, 'store']);
