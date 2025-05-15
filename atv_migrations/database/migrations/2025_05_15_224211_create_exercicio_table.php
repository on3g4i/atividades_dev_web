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
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->float('preco_base', 2);
            $table->integer('qtd_estoque');
            $table->text('descricao');

            $table->timestamps();
        });
        Schema::create('venda', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('item_venda', function (Blueprint $table) {
            $table->id();
            $table->float('preco_praticado', 2);
            $table->integer('qtd');
            $table->foreignId('produto_id')->constrained('produto');
            $table->foreignId('venda_id')->constrained('venda');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercicio');
    }
};
