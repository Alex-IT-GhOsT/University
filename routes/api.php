<?php

use App\Http\Controllers\ClassRoomController;
use App\Http\Controllers\LectionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/students', StudentController::class);
Route::apiResource('classrooms', ClassroomController::class);
Route::apiResource('/lections', LectionController::class);
