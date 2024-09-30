<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;

 

Route::get('/', [MainController::class, 'show'])->name('home');

Route::get('/first', [MainController::class, 'showw'])->name('first');

Route::get('/students', [StudentController::class, 'index']) 
        ->name('students.index');
