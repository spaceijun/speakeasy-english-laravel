<?php

use App\Http\Controllers\Api\DocsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailGrammarController;
use App\Http\Controllers\DetailHafalanController;
use App\Http\Controllers\GrammarController;
use App\Http\Controllers\HafalanController;
use App\Http\Controllers\MateriGrammarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TenseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

        Route::resource('categories', CategoryController::class);
        // Hafalan
        Route::resource('hafalans', HafalanController::class);
        Route::resource('detail-hafalans', DetailHafalanController::class);
        // Grammars
        Route::resource('grammars', GrammarController::class);
        Route::resource('detail-grammars', DetailGrammarController::class);
        Route::resource('materi-grammars', MateriGrammarController::class);
        // tenses
        Route::resource('tenses', TenseController::class);
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/**
 * API DOCS
 */

Route::prefix('docs')->group(function () {
    Route::get('/', [DocsController::class, 'index'])->name('docs.index');
    Route::get('category', [DocsController::class, 'category'])->name('docs.category');
});


require __DIR__ . '/auth.php';
