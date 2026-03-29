<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movimentacao_estoque', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained(table: 'produtos')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantidade');
            $table->string('origem', 20)->comment('Venda ou Compra');
            $table->integer('origem_id')->comment('id de Venda/Compra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacao_estoque');
    }
};
