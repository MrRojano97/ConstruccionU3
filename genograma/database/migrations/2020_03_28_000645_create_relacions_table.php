<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacions', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string("category");
            $table->integer("from");
            $table->integer("to");
            $table->integer("idSujeto");
            $table->timestamps();
            $table->foreign('from')->references('id')->on('genomas');
            $table->foreign('to')->references('id')->on('genomas');
            $table->foreign('idSujeto')->references('id')->on('sujetos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacions');
    }
}
