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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained(table: 'empresas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained(table: 'users')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('valor_total');
            $table->string('status')->comment('pendente, finalizada, cancelada, estornada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
