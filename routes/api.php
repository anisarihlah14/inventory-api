<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;

Route::get('/test', function () {
    return response()->json([
        'message' => 'API berhasil',
        'status' => 200
    ]);
});

Route::apiResource('categories', CategoryController::class);
Route::apiResource('items', ItemController::class);