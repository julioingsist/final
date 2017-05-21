<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abono;
use App\Prestamo;

class AbonosController extends Controller
{
	public function registrar()
    {
    	return view('abono.registrar');
    }

    public function guardar(Request $datos, $prestamo_id)
    {
    	$prestamo=Prestamo::guardar($datos,$prestamo_id);
		$abono->cliente_id->$prestamo->cliente_id;	    			
		$abono->importe_capital=$datos->input('importe');
		$abono->importe_intereses=$datos->input('importe');	
		$abono->save();
		$saldo=$prestamo->saldo;
		$prestamo->saldo->$saldo-$datos('importe');
		$prestamo->save();
		return back();
    }
}
