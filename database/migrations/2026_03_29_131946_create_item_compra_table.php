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
        Schema::create('item_compra', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produto_id')->constrained(table: 'produtos')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('compra_id')->constrained(table: 'compras')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('custo_unitario');
            $table->decimal('subtotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item_compra');
    }
};
