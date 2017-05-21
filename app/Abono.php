<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abono extends Model
{
    protected $table = "abonos";

    public static function guardar(Request $datos, $prestamo_id)
    {
    	$prestamo=Prestamo::find($prestamo_id);
		$abono=new Abono();
		$abono->cliente_id->$prestamo->cliente_id;	    			
		$abono->importe_capital=$datos->input('importe');
		$abono->importe_intereses=$datos->input('importe');	
		$abono->save();
		$saldo=$prestamo->saldo;
		$prestamo->saldo->$saldo-$datos('importe');
		$prestamo->save();
		return $abono;
    }
}
