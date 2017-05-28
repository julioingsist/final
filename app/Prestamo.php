<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DateTime;
use Illuminate\Support\Facades\DB;
use App\Cliente;

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
            ->select('prestamos.*','clientes.nombre as cliente')
            ->where('vendedores.id', '=', $vendedor->id)
            ->where('prestamos.estatus','=', self::ESTATUS_POR_AUTORIZAR)
            ->paginate(10);
        return $prestamos;    
    }

    public static function guardarArchivo($archivo,$nombre)
    {
        $ruta=storage_path();
        $archivo->move($ruta, $nombre);
    }

    public static function quitarAcentos($string)
    {
        return strtr($string,'àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ',
                     'aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    }

    public static function guardar(Request $datos)
    {
        $comprobante_domicilio = $datos->file('comprobante_domicilio');
        $nombre_comprobante_domicilio = $comprobante_domicilio->getClientOriginalName();
        $nombre_comprobante_domicilio = Prestamo::quitarAcentos($nombre_comprobante_domicilio);
        $identificacion_oficial = $datos->file('identificacion_oficial');
        $nombre_identificacion_oficial = $identificacion_oficial->getClientOriginalName();
        $nombre_identificacion_oficial = Prestamo::quitarAcentos($nombre_identificacion_oficial);
        $cliente=Cliente::where('usuario_id', Auth()->user()->id)->first();
        $prestamo=new Prestamo();
        $fecha = new DateTime();
        $prestamo->fecha=$fecha->format('Y-m-d H:i:s');
    	$prestamo->estatus=Prestamo::ESTATUS_POR_AUTORIZAR;
    	$prestamo->cliente_id=$cliente->id;
        $prestamo->comprobante_domicilio=$nombre_comprobante_domicilio;
        $prestamo->identificacion_oficial=$nombre_identificacion_oficial;
        $prestamo->ingreso_mensual=$datos->input('ingreso_mensual');
    	$prestamo->importe_solicitado=$datos->input('importe');
    	$prestamo->importe_autorizado=0;
    	$prestamo->interes=($prestamo->importe_solicitado)*(Prestamo::PORCENTAJE_INTERES/100);
    	$prestamo->total=($prestamo->importe_solicitado)+($prestamo->interes);
    	$prestamo->saldo=$prestamo->total;
        $prestamo->save();
        self::guardarArchivo($comprobante_domicilio,$nombre_comprobante_domicilio);
        self::guardarArchivo($identificacion_oficial,$nombre_identificacion_oficial);
        return $prestamo;
    }

    public static function autorizarPrestamo($id)
    {
        $prestamo=Prestamo::find($id);
        $prestamo->estatus=Prestamo::ESTATUS_AUTORIZADO;
        $prestamo->importe_autorizado=$prestamo->importe_solicitado;
        $prestamo->save();   
        return $prestamo;
    }

    public static function rechazarPrestamo($id)
    {
        $prestamo=Prestamo::find($id);
        $prestamo->estatus=Prestamo::ESTATUS_RECHAZADO;
        $prestamo->save();   
        return $prestamo;
    }

    public static function actualizarSaldo(Request $datos,$prestamo_id)
    {
        $prestamo=Prestamo::find($prestamo_id);
        $prestamo->saldo=($prestamo->saldo)-$datos->input('importe');
        $prestamo->save();
        return $prestamo;
    }
}
