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
use App\Http\Controllers\JawabanFrasaController;
use App\Http\Controllers\JawabanGrammarController;
use App\Http\Controllers\JawabanHafalanController;
use App\Http\Controllers\JawabanIdiomController;
use App\Http\Controllers\JawabanKosakataController;
use App\Http\Controllers\JawabanTenseController;
use App\Http\Controllers\KosakataController;
use App\Http\Controllers\MateriGrammarController;
use App\Http\Controllers\MateriKosakataController;
use App\Http\Controllers\MateriTenseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TenseController;
use App\Http\Controllers\TugasFrasaController;
use App\Http\Controllers\TugasGrammarController;
use App\Http\Controllers\TugasHafalanController;
use App\Http\Controllers\TugasIdiomController;
use App\Http\Controllers\TugasKosakataController;
use App\Http\Controllers\TugasTenseController;
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
        Route::resource('tugas-grammars', TugasGrammarController::class);
        // tenses
        Route::resource('tenses', TenseController::class);
        Route::resource('detail-tenses', DetailTenseController::class);
        Route::resource('materi-tenses', MateriTenseController::class);
        Route::resource('tugas-tenses', TugasTenseController::class);
        // Kosakatas
        Route::resource('kosakata', KosakataController::class);
        Route::resource('materi-kosakatas', MateriKosakataController::class);
        Route::resource('tugas-kosakatas', TugasKosakataController::class);
        // frasa
        Route::resource('frasas', FrasaController::class);
        Route::resource('detail-frasas', DetailFrasaController::class);
        Route::resource('tugas-frasas', TugasFrasaController::class);
        // Idiom
        Route::resource('idioms', IdiomController::class);
        Route::resource('detail-idioms', DetailIdiomController::class);
        Route::resource('tugas-idioms', TugasIdiomController::class);

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
        // Grammars Anwser
        Route::get('jawaban-grammars', [JawabanGrammarController::class, 'index'])->name('jawaban.grammar.index');
        Route::get('jawaban-grammars/create/{tugas_grammars_id}', [JawabanGrammarController::class, 'create'])->name('jawaban.grammar.create');
        Route::get('jawaban-grammars/edit/{tugas_grammars_id}', [JawabanGrammarController::class, 'edit'])->name('jawaban.grammar.edit');
        Route::get('jawaban-grammars/show/{id}', [JawabanGrammarController::class, 'show'])->name('jawaban.grammar.show');
        Route::post('jawaban-grammars/store/{tugas_grammars_id}', [JawabanGrammarController::class, 'store'])->name('jawaban.grammar.store');
        Route::put('jawaban-grammar/update/{jawabanGrammar}', [JawabanGrammarController::class, 'update'])->name('jawaban.grammar.update');
        Route::delete('jawaban-grammars/destroy/{tugas_grammars_id}', [JawabanGrammarController::class, 'destroy'])->name('jawaban.grammar.destroy');
        // Tenses Answer
        Route::get('jawaban-tenses', [JawabanTenseController::class, 'index'])->name('jawaban.tenses.index');
        Route::get('jawaban-tenses/create/{tugas_tenses_id}', [JawabanTenseController::class, 'create'])->name('jawaban.tenses.create');
        Route::get('jawaban-tenses/edit/{tugas_tenses_id}', [JawabanTenseController::class, 'edit'])->name('jawaban.tenses.edit');
        Route::get('jawaban-tenses/show/{id}', [JawabanTenseController::class, 'show'])->name('jawaban.tenses.show');
        Route::post('jawaban-tenses/store/{tugas_tenses_id}', [JawabanTenseController::class, 'store'])->name('jawaban.tenses.store');
        Route::put('jawaban-tenses/update/{jawabanTense}', [JawabanTenseController::class, 'update'])->name('jawaban.tenses.update');
        Route::delete('jawaban-tenses/destroy/{tugas_tenses_id}', [JawabanTenseController::class, 'destroy'])->name('jawaban.tenses.destroy');
        // Kosakata Answer
        Route::get('jawaban-kosakatas', [JawabanKosakataController::class, 'index'])->name('jawaban.kosakatas.index');
        Route::get('jawaban-kosakatas/create/{tugas_kosakatas_id}', [JawabanKosakataController::class, 'create'])->name('jawaban.kosakatas.create');
        Route::get('jawaban-kosakatas/edit/{tugas_kosakatas_id}', [JawabanKosakataController::class, 'edit'])->name('jawaban.kosakatas.edit');
        Route::get('jawaban-kosakatas/show/{id}', [JawabanKosakataController::class, 'show'])->name('jawaban.kosakatas.show');
        Route::post('jawaban-kosakatas/store/{tugas_kosakatas_id}', [JawabanKosakataController::class, 'store'])->name('jawaban.kosakatas.store');
        Route::put('jawaban-kosakatas/update/{jawabanKosakata}', [JawabanKosakataController::class, 'update'])->name('jawaban.kosakatas.update');
        Route::delete('jawaban-kosakatas/destroy/{tugas_kosakatas_id}', [JawabanKosakataController::class, 'destroy'])->name('jawaban.kosakatas.destroy');
        // Frasas Answer
        Route::get('jawaban-frasas', [JawabanFrasaController::class, 'index'])->name('jawaban.frasa.index');
        Route::get('jawaban-frasas/create/{tugas_frasa_id}', [JawabanFrasaController::class, 'create'])->name('jawaban.frasa.create');
        Route::get('jawaban-frasas/edit/{tugas_frasa_id}', [JawabanFrasaController::class, 'edit'])->name('jawaban.frasa.edit');
        Route::get('jawaban-frasas/show/{id}', [JawabanFrasaController::class, 'show'])->name('jawaban.frasa.show');
        Route::post('jawaban-frasas/store/{tugas_frasa_id}', [JawabanFrasaController::class, 'store'])->name('jawaban.frasa.store');
        Route::put('jawaban-frasa/update/{jawabanFrasa}', [JawabanFrasaController::class, 'update'])->name('jawaban.frasa.update');
        Route::delete('jawaban-frasas/destroy/{tugas_frasa_id}', [JawabanFrasaController::class, 'destroy'])->name('jawaban.frasa.destroy');
        // Idioms Answer
        Route::get('jawaban-idioms', [JawabanIdiomController::class, 'index'])->name('jawaban.idioms.index');
        Route::get('jawaban-idioms/create/{tugas_idiom_id}', [JawabanIdiomController::class, 'create'])->name('jawaban.idioms.create');
        Route::get('jawaban-idioms/edit/{tugas_idiom_id}', [JawabanIdiomController::class, 'edit'])->name('jawaban.idioms.edit');
        Route::get('jawaban-idioms/show/{id}', [JawabanIdiomController::class, 'show'])->name('jawaban.idioms.show');
        Route::post('jawaban-idioms/store/{tugas_idiom_id}', [JawabanIdiomController::class, 'store'])->name('jawaban.idioms.store');
        Route::put('jawaban-idioms/update/{jawabanIdiom}', [JawabanIdiomController::class, 'update'])->name('jawaban.idioms.update');
        Route::delete('jawaban-idioms/destroy/{tugas_idiom_id}', [JawabanIdiomController::class, 'destroy'])->name('jawaban.idioms.destroy');
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
