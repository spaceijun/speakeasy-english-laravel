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
use App\Http\Controllers\Api\JawabanHafalanController;
use App\Http\Controllers\Api\KosakataController;
use App\Http\Controllers\Api\MateriGrammarController;
use App\Http\Controllers\Api\MateriKosakataController;
use App\Http\Controllers\Api\MateriTenseController;
use App\Http\Controllers\Api\TenseController;
use App\Http\Controllers\Api\TugasHafalanController;
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
// Grammar
Route::apiResource('grammars', GrammarController::class);
Route::apiResource('tenses', TenseController::class);
Route::apiResource('detail-tenses', DetailTenseController::class);
Route::apiResource('materi-tenses', MateriTenseController::class);
Route::apiResource('detail-grammars', DetailGrammarController::class);
Route::apiResource('materi-grammars', MateriGrammarController::class);
Route::apiResource('kosakatas', KosakataController::class);
Route::apiResource('materi-kosakatas', MateriKosakataController::class);
// frasa
Route::apiResource('frasas', FrasaController::class);
Route::apiResource('detail-frasas', DetailFrasaController::class);
// idioms
Route::apiResource('idioms', IdiomController::class);
Route::apiResource('detail-idioms', DetailIdiomController::class);
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

//  Hafalan
Route::get('jawaban-hafalans', [JawabanHafalanController::class, 'index'])->name('jawaban.hafalan.index');
Route::get('jawaban-hafalans/create/{tugas_hafalan_id}', [JawabanHafalanController::class, 'create'])->name('jawaban.hafalan.create');
Route::get('jawaban-hafalans/edit/{tugas_hafalan_id}', [JawabanHafalanController::class, 'edit'])->name('jawaban.hafalan.edit');
Route::get('jawaban-hafalans/show/{id}', [JawabanHafalanController::class, 'show'])->name('jawaban.hafalan.show');
Route::post('jawaban-hafalans/store/{tugas_hafalan_id}', [JawabanHafalanController::class, 'store'])->name('jawaban.hafalan.store');
Route::put('jawaban-hafalan/update/{jawabanHafalan}', [JawabanHafalanController::class, 'update'])->name('jawaban.hafalan.update');
Route::delete('jawaban-hafalans/destroy/{tugas_hafalan_id}', [JawabanHafalanController::class, 'destroy'])->name('jawaban.hafalan.destroy');
