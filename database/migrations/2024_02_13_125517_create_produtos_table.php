<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('categoria_id')->constrained();
            $table->string('nome');
            $table->string('descricao');
            $table->string('marca');
            $table->string('cor');
            $table->double('preco', 6, 2);
            $table->double('peso', 6, 2);
            $table->integer('estoque');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
