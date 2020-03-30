<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenomasTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('genomas', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string("nombre");
            $table->string("apellido");
            $table->integer("edad");
            $table->string("category");
            $table->string("loc");
            $table->integer("idSujeto");
            $table->timestamps();
            $table->foreign('idsujeto')->references('id')->on('sujetos');
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genomas');
    }
}
