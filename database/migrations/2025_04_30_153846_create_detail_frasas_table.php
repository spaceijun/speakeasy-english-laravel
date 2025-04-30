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
        Schema::create('detail_frasas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('frasa_id')->constrained('frasa')->onDelete('cascade');
            $table->string('english');
            $table->string('indonesian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_frasas');
    }
};
