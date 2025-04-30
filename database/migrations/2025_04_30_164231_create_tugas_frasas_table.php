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
        Schema::create('tugas_frasas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frasa_id')->constrained('frasa')->onDelete('cascade');
            $table->string('kkm');
            $table->text('body_questions');
            $table->timestamps();
        });

        Schema::create('jawaban_frasas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tugas_frasa_id')->constrained('tugas_frasas')->onDelete('cascade');
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
        Schema::dropIfExists('tugas_frasas');
    }
};
