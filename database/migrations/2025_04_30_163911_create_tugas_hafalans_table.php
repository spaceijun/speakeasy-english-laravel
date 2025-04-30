<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tugas_hafalans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hafalan_id')->constrained('hafalan')->onDelete('cascade');
            $table->string('kkm');
            $table->text('body_questions');
            $table->timestamps();
        });

        Schema::create('jawaban_hafalans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tugas_hafalan_id')->constrained('tugas_hafalans')->onDelete('cascade');
            $table->text('body_answers');
            $table->string('nilai')->nullable();
            $table->enum('status', ['Belum Dikoreksi', 'Sudah Dikoreksi'])->default('Belum Dikoreksi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas_hafalans');
    }
};
