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
        Schema::create('attack_level_pokemon', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon_id')->constrained()->onDelete('cascade');;
            $table->foreignId('attack_id')->constrained()->onDelete('cascade');;
            $table->integer('level');
            $table->timestamps();

            $table->unique(['pokemon_id', 'attack_id', 'level']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_attack_levels');
    }
};
