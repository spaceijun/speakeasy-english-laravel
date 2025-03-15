<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DetailHafalanController;
use App\Http\Controllers\Api\GrammarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('categories', CategoryController::class);
Route::apiResource('detail-hafalans', DetailHafalanController::class);
Route::apiResource('grammars', GrammarController::class);
