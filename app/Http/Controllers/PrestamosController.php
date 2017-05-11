<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use App\Cliente;
use Auth;

class PrestamosController extends Controller
{
    public function solicitar()
    {
    	return view('prestamo.solicitar');
    }

    public function guardarSolicitud(Request $datos)
    {
    	$cliente=Cliente::where('usuario_id',auth()->user()->id);
    	$prestamo=new Prestamo();
    	$prestamo->estatus=1;
    	$prestamo->cliente_id=$cliente->id;
    	$prestamo->importe_solicitado=$datos->input('importe');
    	$prestamo->importe_autorizado=0;
    	$prestamo->tipo=$datos->$datos->input('tipo_interes');
    	$prestamo->interes=0;
    	$prestamo->total=$datos->$datos->input('importe');
    	$prestamo->saldo=$datos->$datos->input('importe');
    }
}
