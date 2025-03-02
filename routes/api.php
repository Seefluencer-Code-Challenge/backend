<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;

Route::get('/test', function () {
    return response()->json(['message' => 'API is working!'], 200);
});

// User API
Route::post('/auth/google', [UserController::class, 'googleAuth']);

// Course API
Route::get('/course', [CourseController::class, 'index']);
Route::get('/course/{id}', [CourseController::class, 'show']);
// Route::put('/course/{id}', [CourseController::class, 'update']);

// Lesson API
Route::get('/lesson', [LessonController::class, 'index']);
Route::get('/lesson/{id}', [LessonController::class, 'show']);
// Route::put('/lesson/{id}', [LessonController::class, 'update']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/course', [CourseController::class, 'store']);
    Route::put('/course/{id}', [CourseController::class, 'update']);
    Route::delete('/course/{id}', [CourseController::class, 'destroy']);

    Route::put('/lesson/{id}', [LessonController::class, 'update']);
    Route::post('/lesson', [LessonController::class, 'store']);
    Route::delete('/lesson/{id}', [LessonController::class, 'destroy']);
});

