<?php

use App\Http\Controllers\Api\DocsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailFrasaController;
use App\Http\Controllers\DetailGrammarController;
use App\Http\Controllers\DetailHafalanController;
use App\Http\Controllers\DetailIdiomController;
use App\Http\Controllers\DetailTenseController;
use App\Http\Controllers\FrasaController;
use App\Http\Controllers\GrammarController;
use App\Http\Controllers\HafalanController;
use App\Http\Controllers\IdiomController;
use App\Http\Controllers\JawabanHafalanController;
use App\Http\Controllers\KosakataController;
use App\Http\Controllers\MateriGrammarController;
use App\Http\Controllers\MateriKosakataController;
use App\Http\Controllers\MateriTenseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TenseController;
use App\Http\Controllers\TugasHafalanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
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
        Route::resource('tugas-hafalans', TugasHafalanController::class);
        // Route::resource('jawaban-hafalans', JawabanHafalanController::class);
        // Grammars
        Route::resource('grammars', GrammarController::class);
        Route::resource('detail-grammars', DetailGrammarController::class);
        Route::resource('materi-grammars', MateriGrammarController::class);
        // tenses
        Route::resource('tenses', TenseController::class);
        Route::resource('detail-tenses', DetailTenseController::class);
        Route::resource('materi-tenses', MateriTenseController::class);
        // Kosakatas
        Route::resource('kosakata', KosakataController::class);
        Route::resource('materi-kosakatas', MateriKosakataController::class);
        // frasa
        Route::resource('frasas', FrasaController::class);
        Route::resource('detail-frasas', DetailFrasaController::class);
        // Idiom
        Route::resource('idioms', IdiomController::class);
        Route::resource('detail-idioms', DetailIdiomController::class);

        /**
         * Route for all answers
         */

        //  Hafalan Answer
        Route::get('jawaban-hafalans', [JawabanHafalanController::class, 'index'])->name('jawaban.hafalan.index');
        Route::get('jawaban-hafalans/create/{tugas_hafalan_id}', [JawabanHafalanController::class, 'create'])->name('jawaban.hafalan.create');
        Route::get('jawaban-hafalans/edit/{tugas_hafalan_id}', [JawabanHafalanController::class, 'edit'])->name('jawaban.hafalan.edit');
        Route::get('jawaban-hafalans/show/{id}', [JawabanHafalanController::class, 'show'])->name('jawaban.hafalan.show');
        Route::post('jawaban-hafalans/store/{tugas_hafalan_id}', [JawabanHafalanController::class, 'store'])->name('jawaban.hafalan.store');
        Route::put('jawaban-hafalan/update/{jawabanHafalan}', [JawabanHafalanController::class, 'update'])->name('jawaban.hafalan.update');
        Route::delete('jawaban-hafalans/destroy/{tugas_hafalan_id}', [JawabanHafalanController::class, 'destroy'])->name('jawaban.hafalan.destroy');
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
