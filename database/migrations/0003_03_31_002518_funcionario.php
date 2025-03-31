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
        Schema::create('funcionario', function (Blueprint $table) {

            $table->id('id_funcionario');
            $table->string('nome_func', 45);

            $table->timestamps();
        });

    }


    public function down()

    {

        Schema::dropIfExists('funcionario');

    }
};
