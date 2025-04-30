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
        Schema::create('detail_idioms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idiom_id')->constrained('idiom')->onDelete('cascade');
            $table->string('english');
            $table->string('indonesia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_idioms');
    }
};
