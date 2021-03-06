<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            //$table->increments('id'); Removido para implementação de Uuids
            $table->uuid('id');// Cria campo Uuid
            $table->primary('id');// Faz do campo Uuid uma chave primaria

            $table->string('name',50);
            $table->string('descricao',50);
            $table->string('img',50)->default('default.png');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto');
    }
}
