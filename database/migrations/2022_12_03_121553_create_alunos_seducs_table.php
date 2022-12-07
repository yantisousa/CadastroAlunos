<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->dateTime('dataNasc');
            $table->timestamps();
        });
    }
    public function rename()
    {
        Schema::rename('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 255);
            $table->dateTime('dataNasc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos_seducs');
    }
};
