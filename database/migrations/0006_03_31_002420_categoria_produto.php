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
        Schema::create('categoria_produto', function (Blueprint $table) {

            $table->id('id_categoria_produto');
            $table->string('nome_cat_prod', 45);
            $table->unsignedBigInteger('categoria_id_produto')->nullable();


            $table->foreign('categoria_id_produto')->references('id_produto')->on('produto');

            $table->timestamps();
        });

    }


    public function down()

    {

        Schema::dropIfExists('categoria_produto');

    }
};
