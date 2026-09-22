<?php

use App\Http\Controllers\FitnessController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/fitness', [FitnessController::class, 'index']);