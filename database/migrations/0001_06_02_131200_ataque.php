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
        Schema::create('ataque', function (Blueprint $table) {

            $table->id('id');
            $table->string('nome', 45);
            $table->string('tipo', 45);
            $table->string('dano', 45);
            
            $table->timestamps();
            
        });

    }


    public function down()

    {

        Schema::dropIfExists('ataque');

    }
};
