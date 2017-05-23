<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePrestamos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->datetime('fecha');
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('restrict');
            $table->integer('estatus');
            $table->decimal('ingreso_mensual');
            $table->string('comprobante_domicilio');
            $table->string('identificacion_oficial');
            $table->decimal('importe_solicitado',18 , 4);
            $table->decimal('importe_autorizado',18 , 4);
            $table->decimal('interes',18 , 4);
            $table->decimal('total',18 , 4);    
            $table->decimal('saldo',18 , 4);
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
        dropIfExists('prestamos');
    }
}
