<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('monto',15,2);
            $table->double('monto_mensual',15,2);
            $table->double('tasa',15,2);
            $table->integer('mensualidad');

            $table->unsignedBigInteger('holder_id'); //añadimos a la tabla el elemento relacionado
            $table->foreign('holder_id')->references('id')->on('holders');//se el denota que es una llave foranea y de donde proviene

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
        Schema::dropIfExists('credits');
    }
}
