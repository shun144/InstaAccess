<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;


Route::get('/loglist', [LogController::class, 'display']);

// Route::get('/', function () {
//     return view('welcome');
// });
