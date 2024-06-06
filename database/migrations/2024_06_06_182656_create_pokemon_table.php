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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description');
            $table->integer('pv');
            $table->integer('taille');
            $table->integer('poid');
            $table->foreignId('type1_id')->references('id')->on('types');
            $table->foreignId('type2_id')->references('id')->on('types')->nullable();
            $table->string('imgUrl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon');
    }
};
