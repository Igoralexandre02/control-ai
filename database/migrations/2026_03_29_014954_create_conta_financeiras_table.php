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
        Schema::create('conta_financeiras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained(table: 'empresas')->onUpdate('cascade')->onDelete('cascade');
            $table->string('nome', 255);
            $table->decimal('saldo_atual');
            $table->boolean('ativo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conta_financeiras');
    }
};
