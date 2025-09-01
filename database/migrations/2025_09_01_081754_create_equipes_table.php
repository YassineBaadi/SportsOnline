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
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->unique();
            $table->string('ville');
            $table->string('pays');
            $table->string('image');
            $table->foreignId('genre_id')->nullable()->constrained('genre')->nullOnDelete();
            $table->foreignId('continent_id')->nullable()->constrained('continents')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipes');
    }
};
