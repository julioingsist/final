<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Abono extends Model
{
    protected $table = "abonos";
    CONST ESTATUS_AUTORIZADO = 2;

    public static function consultarPrestamos()
    {
    	$vendedor=Vendedor::where('usuario_id','=', auth()->user()->id)->first();
    	$prestamos=DB::table('prestamos')
            ->join('clientes', 'prestamos.cliente_id', '=', 'clientes.id')
            ->select('prestamos.*','clientes.nombre as cliente')
            ->where('clientes.vendedor_id', '=', $vendedor->id)
            ->where('prestamos.estatus','=', self::ESTATUS_AUTORIZADO)
            ->where('prestamos.saldo','>',0)
            ->get();
            
        return $prestamos;
    }

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
