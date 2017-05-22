<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Cliente;

class Prestamo extends Model
{
    protected $table = "prestamos";
    const ESTATUS_POR_APROBAR = 1; 
    const ESTATUS_APROBADO = 2;
    const ESTATUS_RECHAZADO = 3;

    public static function guardar(Request $datos)
    {
        $cliente=Cliente::where('usuario_id',Auth()->user()->id);
        $prestamo=new Prestamo();
    	$prestamo->estatus=ESTATUS_POR_APROBAR;
    	$prestamo->cliente_id=$cliente->id;
    	$prestamo->importe_solicitado=$datos->input('importe');
    	$prestamo->importe_autorizado=0;
    	$prestamo->interes=0;
    	$prestamo->total=$datos->$datos->input('importe');
    	$prestamo->saldo=$datos->$datos->input('importe');
        $prestamo->save();
    }

    public static function autorizarPrestamo($id)
    {
        $prestamo=Prestamo::find($id);
        $prestamo->estatus=ESTATUS_APROBADO;
        $prestamo->cliente_id=$cliente->id;
        $prestamo->importe_solicitado=$datos->input('importe');
        $prestamo->importe_autorizado=0;
        $prestamo->tipo_interes=$datos->$datos->input('tipo_interes');
        $prestamo->interes=0;
        $prestamo->total=$datos->$datos->input('importe');
        $prestamo->saldo=$datos->$datos->input('importe');
        $prestamo->save();   
    }
}
