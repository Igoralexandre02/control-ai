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
        Schema::create('movimentacao_financeiras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('conta_financeira_id')->constrained(table: 'conta_financeiras')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('valor_total');
            $table->string('origem', 20)->comment('Venda ou Compra');
            $table->integer('origem_id')->comment('id de Venda/Compra');
            $table->string('descricao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacao_financeiras');
    }
};
