<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class,'index'])->name('movie.index');

Route::post('/movies/store', [MovieController::class,'store'])->name('movie.store');
