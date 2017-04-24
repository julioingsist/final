<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellido_paterno', 30);
            $table->string('apellido_materno', 30);
            $table->string('email', 100);
            $table->unique('email');
            $table->string('password', 100);
            $table->datetime('fecha_nacimiento');
            $table->string('calle');
            $table->string('numero_exterior');
            $table->string('numero_interior')->nullable();
            $table->string('direccion')->default('DOMCILIO CONOCIDO');
            $table->string('colonia');
            $table->integer('municipio_id')->unsigned();;
            $table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('restrict');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados')->onDelete('restrict');
            $table->binary('foto')->nullable();
            $table->binary('comprobante_domicilio')->nullable();
            $table->integer('estado_civil_id')->unsigned();
            $table->foreign('estado_civil_id')->references('id')->on('estados_civiles')->onDelete('restrict');
            $table->decimal('ingreso_mensual',18 , 4);
            $table->integer('tipo')->default(0);
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
        
    }
}
