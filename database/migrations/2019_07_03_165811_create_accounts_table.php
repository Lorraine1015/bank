<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('no_cuenta');
            $table->double('saldo_actual',15,2);

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
        Schema::dropIfExists('accounts');
    }
}
