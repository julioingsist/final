<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAbonos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abonos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->datetime('fecha');
            $table->integer('prestamo_id')->unsigned();
            $table->foreign('prestamo_id')->references('id')->on('prestamos')->onDelete('restrict');
            $table->decimal('importe',18 , 4);
            $table->rememberToken();
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
        //
    }
}
