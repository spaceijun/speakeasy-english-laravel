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
        Schema::create('materi_kosakatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kosakatas_id')->constrained('kosakatas')->onDelete('cascade');
            $table->string('english');
            $table->text('indonesian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi_kosakatas');
    }
};
