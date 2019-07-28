<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type',['Retiro' , 'Abono']);
            $table->double('cantidad',15,2);
            $table->string('referencia');

            $table->unsignedBigInteger('holder_id'); //añadimos a la tabla el elemento relacionado
            $table->foreign('holder_id')->references('id')->on('holders');//se el denota que es una llave foranea y de donde proviene
            
            $table->unsignedBigInteger('account_id'); //añadimos a la tabla el elemento relacionado
            $table->foreign('account_id')->references('id')->on('accounts');//se el denota que es una llave foranea y de donde proviene
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
        Schema::dropIfExists('movements');
    }
}
