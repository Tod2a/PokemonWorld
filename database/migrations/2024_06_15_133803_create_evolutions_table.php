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
        Schema::create('evolutions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('prevolution_id')->nullable()->references('id')->on('pokemon')->onDelete('cascade');
            $table->foreignId('evolution_id')->nullable()->references('id')->on('pokemon')->onDelete('cascade');
            $table->integer('level');
            $table->timestamps();


            $table->unique(['prevolution_id', 'evolution_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evolutions');
    }
};
