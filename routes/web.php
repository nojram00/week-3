<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::controller(StudentController::class)->group(function () {
    Route::get('/', 'index')->name('students');
    Route::get('/student/{student}', 'get')->name('student');
});
