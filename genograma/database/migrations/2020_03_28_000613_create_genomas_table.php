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
        //LA ID DEL SUJETO MAS ID DEL GENOMA SERA LA PRIMARI KEY
        Schema::create('genomas', function (Blueprint $table) {
            $table->integer('id');
            $table->text("text");
            $table->string("category");
            $table->integer("idSujeto");
            $table->timestamps();
            $table->primary(['id', 'idSujeto']);
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
