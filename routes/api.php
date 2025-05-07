<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DetailFrasaController;
use App\Http\Controllers\Api\DetailGrammarController;
use App\Http\Controllers\Api\DetailHafalanController;
use App\Http\Controllers\Api\DetailIdiomController;
use App\Http\Controllers\Api\DetailTenseController;
use App\Http\Controllers\Api\FrasaController;
use App\Http\Controllers\Api\GrammarController;
use App\Http\Controllers\Api\HafalanController;
use App\Http\Controllers\Api\IdiomController;
use App\Http\Controllers\Api\JawabanFrasaController;
use App\Http\Controllers\Api\JawabanGrammarController;
use App\Http\Controllers\Api\JawabanHafalanController;
use App\Http\Controllers\Api\JawabanIdiomController;
use App\Http\Controllers\Api\JawabanKosakataController;
use App\Http\Controllers\Api\JawabanTenseController;
use App\Http\Controllers\Api\KosakataController;
use App\Http\Controllers\Api\MateriGrammarController;
use App\Http\Controllers\Api\MateriKosakataController;
use App\Http\Controllers\Api\MateriTenseController;
use App\Http\Controllers\Api\TenseController;
use App\Http\Controllers\Api\TugasFrasaController;
use App\Http\Controllers\Api\TugasGrammarController;
use App\Http\Controllers\Api\TugasHafalanController;
use App\Http\Controllers\Api\TugasIdiomController;
use App\Http\Controllers\Api\TugasKosakataController;
use App\Http\Controllers\Api\TugasTenseController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('categories', CategoryController::class);
// Hafalan
Route::apiResource('detail-hafalans', DetailHafalanController::class);
Route::apiResource('hafalans', HafalanController::class);
Route::apiResource('tugas-hafalans', TugasHafalanController::class);
Route::apiResource('jawaban-hafalans', JawabanHafalanController::class);
Route::get('jawaban-hafalan/user/{userId}', [JawabanHafalanController::class, 'getByUser']);

// Grammar
Route::apiResource('grammars', GrammarController::class);
Route::apiResource('tugas-grammars', TugasGrammarController::class);
Route::apiResource('detail-grammars', DetailGrammarController::class);
Route::apiResource('materi-grammars', MateriGrammarController::class);
Route::apiResource('jawaban-grammars', JawabanGrammarController::class);
Route::get('jawaban-grammars/user/{userId}', [JawabanGrammarController::class, 'getByUserGrammars']);

// Tenses
Route::apiResource('tenses', TenseController::class);
Route::apiResource('tugas-tenses', TugasTenseController::class);
Route::apiResource('jawaban-tenses', JawabanTenseController::class);
Route::get('jawaban-tenses/user/{userId}', [JawabanTenseController::class, 'getByUserTenses']);
Route::apiResource('detail-tenses', DetailTenseController::class);
Route::apiResource('materi-tenses', MateriTenseController::class);

// Kosakatas
Route::apiResource('kosakatas', KosakataController::class);
Route::apiResource('materi-kosakatas', MateriKosakataController::class);
Route::apiResource('tugas-kosakatas', TugasKosakataController::class);
Route::apiResource('jawaban-kosakatas', JawabanKosakataController::class);
Route::get('jawaban-kosakatas/user/{userId}', [JawabanKosakataController::class, 'getByUserKosakatas']);

// frasa
Route::apiResource('frasas', FrasaController::class);
Route::apiResource('detail-frasas', DetailFrasaController::class);
Route::apiResource('tugas-frasas', TugasFrasaController::class);
Route::apiResource('jawaban-frasas', JawabanFrasaController::class);
Route::get('jawaban-frasas/user/{userId}', [JawabanFrasaController::class, 'getByUserFrasas']);


// idioms
Route::apiResource('idioms', IdiomController::class);
Route::apiResource('detail-idioms', DetailIdiomController::class);
Route::apiResource('tugas-idioms', TugasIdiomController::class);
Route::apiResource('jawaban-idioms', JawabanIdiomController::class);
Route::get('jawaban-frasas/user/{userId}', [JawabanFrasaController::class, 'getByUserIdioms']);

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

/**
 * Routes API Jawaban
 */

// Route::prefix('jawaban-hafalan')->group(function () {
//     // List all jawaban hafalan
//     Route::get('/', [JawabanHafalanController::class, 'apiIndex']);
//     // Show form create
//     Route::get('/create/{tugas_hafalan_id}', [JawabanHafalanController::class, 'create']);
//     // Get a specific jawaban hafalan
//     Route::get('/{id}', [JawabanHafalanController::class, 'apiShow']);
//     // Create a new jawaban hafalan
//     Route::post('/', [JawabanHafalanController::class, 'apiStore']);
//     // Update a jawaban hafalan
//     Route::put('/{id}', [JawabanHafalanController::class, 'apiUpdate']);
//     Route::patch('/{id}', [JawabanHafalanController::class, 'apiUpdate']);
//     // Delete a jawaban hafalan
//     Route::delete('/{id}', [JawabanHafalanController::class, 'apiDestroy']);
//     // Get jawaban hafalan by tugas hafalan ID
//     Route::get('/by-tugas/{tugas_hafalan_id}', [JawabanHafalanController::class, 'apiGetByTugasHafalan']);
//     // Get jawaban hafalan by user ID
//     Route::get('/by-user/{user_id}', [JawabanHafalanController::class, 'apiGetByUser']);
// });
