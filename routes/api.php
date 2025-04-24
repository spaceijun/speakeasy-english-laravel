<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DetailGrammarController;
use App\Http\Controllers\Api\DetailHafalanController;
use App\Http\Controllers\Api\DetailTenseController;
use App\Http\Controllers\Api\GrammarController;
use App\Http\Controllers\Api\HafalanController;
use App\Http\Controllers\Api\MateriGrammarController;
use App\Http\Controllers\Api\MateriTenseController;
use App\Http\Controllers\Api\TenseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('categories', CategoryController::class);
Route::apiResource('detail-hafalans', DetailHafalanController::class);
Route::apiResource('hafalans', HafalanController::class);
Route::apiResource('grammars', GrammarController::class);
Route::apiResource('tenses', TenseController::class);
Route::apiResource('detail-tenses', DetailTenseController::class);
Route::apiResource('materi-tenses', MateriTenseController::class);
Route::apiResource('detail-grammars', DetailGrammarController::class);
Route::apiResource('materi-grammars', MateriGrammarController::class);
// Route::apiResource('login', AuthenticatedSessionController::class);
// Route::apiResource('register', RegisteredUserController::class);
// Route::post('register', [AuthController::class, 'register']);

// Route::middleware('auth:sanctum')->group(function () {
//     Route::post('/logout', [AuthController::class, 'logout']);
//     Route::get('/user', [AuthController::class, 'user']);
//     Route::get('/login', [AuthController::class, 'login']);
//     Route::get('/register', [AuthController::class, 'register']);
// });

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
