<?php

use App\Http\Controllers\Api\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route for authenticated user info (optional)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Student API routes
Route::get('/students', [StudentController::class, 'index']); // List students
Route::post('/students', [StudentController::class, 'store']); // List students
Route::put('/students/{id}', [StudentController::class, 'update']); // Update a student
Route::delete('/students/{id}', [StudentController::class, 'destroy']); // Delete a student
