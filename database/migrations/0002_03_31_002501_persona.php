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
        Schema::create('persona', function (Blueprint $table) {

            $table->id('id');
            $table->string('nome', 45);
            $table->string('arcana', 45);
            $table->string('nivel');


            $table->timestamps();
        });

    }


    public function down()

    {

        Schema::dropIfExists('persona');

    }
};
