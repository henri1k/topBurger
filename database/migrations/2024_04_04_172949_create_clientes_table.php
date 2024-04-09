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
        Schema::create('cliente_models', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200)->nullable(false);
            $table->string('email', 200)-> unique()-> nullable(false);
            $table->string('endereco', 150)->nullable(false);
            $table->string('cpf', 11)->nullable(false);
            $table->string('numero', 4)->nullable(false);
            $table->string('telefone', 11)->nullable(false);
            $table->string('imagem')->nullable(false);
            $table->string('password')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente_models');
    }
};
