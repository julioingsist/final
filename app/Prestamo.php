<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    protected $table = "prestamos";

    public static function guardar(Request $datos)
    {
        $prestamo=new Prestamo();
    	$prestamo->estatus=1;
    	$prestamo->cliente_id=$cliente->id;
    	$prestamo->importe_solicitado=$datos->input('importe');
    	$prestamo->importe_autorizado=0;
    	$prestamo->tipo_interes=$datos->$datos->input('tipo_interes');
    	$prestamo->interes=0;
    	$prestamo->total=$datos->$datos->input('importe');
    	$prestamo->saldo=$datos->$datos->input('importe');
    }

    public static function autorizarPrestamo($id)
    {
        $prestamo=Prestamo::find($id);
        $prestamo->estatus=1;
        $prestamo->cliente_id=$cliente->id;
        $prestamo->importe_solicitado=$datos->input('importe');
        $prestamo->importe_autorizado=0;
        $prestamo->tipo_interes=$datos->$datos->input('tipo_interes');
        $prestamo->interes=0;
        $prestamo->total=$datos->$datos->input('importe');
        $prestamo->saldo=$datos->$datos->input('importe');   
    }
}
