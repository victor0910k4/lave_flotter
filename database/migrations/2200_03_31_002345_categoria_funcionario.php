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
        Schema::create('categoria_funcionario', function (Blueprint $table) {

            $table->id('id_categoria_funcionario');
            $table->string('nome_cat_func', 45);
            $table->unsignedBigInteger('categoria_id_funcionario')->nullable();

            $table->foreign('categoria_id_funcionario')->references('id_funcionario')->on('funcionario');

            $table->timestamps();
        });

    }


    public function down()

    {

        Schema::dropIfExists('categoria_funcionario');

    }
};
