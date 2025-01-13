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
        Schema::dropIfExists('enderecos');

        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('cep', 9)->index();
            $table->string('logradouro', 255)->nullable();
            $table->string('numero', 10)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->char('uf', 2)->nullable()->index();
            $table->string('complemento', 255)->nullable();
            $table->nullableMorphs('model');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
