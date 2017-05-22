<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Cliente;
use Illuminate\Support\Facades\DB;

class Prestamo extends Model
{
    protected $table = "prestamos";
    const ESTATUS_POR_AUTORIZAR = 1; 
    const ESTATUS_AUTORIZADO = 2;
    const ESTATUS_RECHAZADO = 3;
    const PORCENTAJE_INTERES = 40;
    
    public static function autorizar()
    {
        $vendedor=Vendedor::where('usuario_id',Auth()->user()->id)->first();
        $prestamos=DB::table('prestamos')
            ->join('clientes', 'prestamos.cliente_id', '=', 'clientes.id')
            ->join('vendedores', 'clientes.vendedor_id', '=', 'vendedores.id')
            ->where('vendedores.id', '=', $vendedor->id)
            ->paginate(10);
        return $prestamos;    
    }

    public static function guardar(Request $datos)
    {
        $cliente=Cliente::where('usuario_id',Auth()->user()->id);
        $prestamo=new Prestamo();
    	$prestamo->estatus=ESTATUS_POR_AUTORIZAR;
    	$prestamo->cliente_id=$cliente->id;
    	$prestamo->importe_solicitado=$datos->input('importe');
    	$prestamo->importe_autorizado=0;
    	$prestamo->interes=($prestamo->importe_autorizado)*(PORCENTAJE_INTERES/100);
    	$prestamo->total=($prestamo->importe_autorizado)+($prestamo->interes);
    	$prestamo->saldo=$prestamo->total;
        $prestamo->save();
    }

    public static function autorizarPrestamo($id)
    {
        $prestamo=Prestamo::find($id);
        $prestamo->estatus=ESTATUS_AUTORIZADO;
        $prestamo->importe_autorizado=$prestamo->importe_solicitado;
        $prestamo->save();   
    }

    public static function rechazarPrestamo($id)
    {
        $prestamo=Prestamo::find($id);
        $prestamo->estatus=ESTATUS_RECHAZADO;
        $prestamo->save();   
    }
}
