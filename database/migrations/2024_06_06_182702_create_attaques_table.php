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
        Schema::create('attaques', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('imgUrl');
            $table->integer('force');
            $table->integer('precision');
            $table->text('description');
            $table->boolean('sorte');
            $table->foreignId('type_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attaques');
    }
};
