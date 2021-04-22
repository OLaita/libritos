<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->unsignedBigInteger('autor');
            $table->integer('precio');
            $table->string('ISBN');
            $table->integer('num_pag');
            $table->timestamps();
            $table->foreign('autor')->references('id')->on('autors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('libros');
    }
}
