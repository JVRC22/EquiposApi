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
        Schema::create('equipos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 35)->unique();
            $table->bigInteger('division');
            $table->bigInteger('campeonatos');
            $table->foreignId('estado')->references('id')->on('estados')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->foreignId('propietario')->references('id')->on('propietarios')->onUpdate('cascade')->onDelete('cascade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipos');
    }
};
