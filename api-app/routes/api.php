<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// localhost:8000/api/posts
Route::get("/posts", [PostController::class, 'index'])->name('posts');
Route::get("/posts/{id}", [PostController::class, 'show'])->name('show');
Route::post("/posts", [PostController::class, 'store'])->name('store');
Route::put("/posts/{id}", [PostController::class, 'update'])->name('update');
Route::delete("/posts/{id}", [PostController::class, 'destroy'])->name('destroy');
