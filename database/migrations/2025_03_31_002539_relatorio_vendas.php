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
        Schema::create('relatorio_vendas', function (Blueprint $table) {

            $table->id('id_relatorio_vendas');
            $table->string('nome_prod_relatorio', 45);
            $table->date('data_relatorio');

            $table->timestamps();
        });

    }


    public function down()

    {

        Schema::dropIfExists('relatorio_vendas');

    }
};
