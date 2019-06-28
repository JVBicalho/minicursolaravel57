<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class CreateEstoqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoque', function (Blueprint $table) {
            //$table->increments('id'); Removido para implementação de Uuids
            $table->uuid('id');// Cria campo Uuid
            $table->primary('id');// Faz do campo Uuid uma chave primaria

            //$table->unsignedInteger('produto_id'); o campo id precisa ser do mesmo tipo da chave primaria
            $table->uuid('produto_id');
            $table->foreign('produto_id')->references('id')->on('produto')->onDelete('cascade');
            $table->integer('quantidade');
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
        Schema::dropIfExists('estoque');
    }
}
