<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PriorityController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// TASKS
Route::get("/tasks", [TaskController::class, "list"]);
Route::post("/tasks", [TaskController::class, "create"]);
Route::get("/tasks/{id}", [TaskController::class, "read"])->where('id', '[0-9]+');
Route::delete("/tasks/{id}", [TaskController::class, "delete"])->where('id', '[0-9]+');


// CATEGORIES
Route::get("/categories", [CategoryController::class, "list"]);
Route::post("/categories", [CategoryController::class, "create"]);
Route::get("/categories/{id}", [CategoryController::class, "read"])->where('id', '[0-9]+');

// PRIORITIES
Route::get("/priorities", [PriorityController::class, "list"]);
Route::get("/priorities/{id}", [PriorityController::class, "read"])->where('id', '[0-9]+');