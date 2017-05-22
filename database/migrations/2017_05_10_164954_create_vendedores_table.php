<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendedores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellido_paterno', 30);
            $table->string('apellido_materno', 30)->default('');
            $table->datetime('fecha_nacimiento')->default('1970-01-01 00:00:00');
            $table->string('calle')->default('');
            $table->string('numero_exterior')->default('');
            $table->string('numero_interior')->default('');
            $table->string('telefono', 10)->default('');
            $table->string('colonia')->default('');
            $table->string('ciudad')->default('');
            $table->string('municipio')->default('');
            $table->string('estado')->default('');
            $table->string('foto')->default('');
            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('restrict');
            $table->integer('estatus');
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
        dropIfExists('vendedores');
    }
}
