<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('colleges', CollegeController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('programs', ProgramController::class);
Route::resource('students', StudentController::class);
