<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use DateTime;
use Illuminate\Support\Facades\DB;
use Auth;

class Cliente extends Model
{
    protected $table = "clientes";
    CONST ADMIN = 1;
    CONST VENDEDOR = 2;
    CONST CLIENTE = 3;

    public static function guardar(Request $datos)
    {
        $vendedor=Vendedor::where('usuario_id','=', Auth::user()->id)->first();
    	$password=str_random(8);
        $datos['password']=$password;
        $usuario=RegisterController::create($datos->all());
        $cliente=new Cliente();
        $cliente->nombre=$datos->input('nombre');
        $cliente->apellido_paterno=$datos->input('apellido_paterno');
        $cliente->apellido_materno=$datos->input('apellido_materno');
        $cliente->usuario_id=$usuario->id;
        $fecha = new DateTime();
        $cliente->estatus=Vendedor::ESTATUS_ACTIVO;    
        $cliente->created_at=$fecha->format('Y-m-d H:i:s');
        $cliente->updated_at=$fecha->format('Y-m-d H:i:s');
        $cliente->estado_civil_id=1;
        $cliente->vendedor_id=$vendedor->id;
        $cliente->save();
        return compact('cliente','password');
    }

    public static function actualizar(Request $datos,$id)
    {
    	$cliente=Cliente::find($id);
    	$cliente->nombre=$datos->input('nombre');
    	$cliente->apellido_paterno=$datos->input('apellido_paterno');
    	$cliente->apellido_materno=$datos->input('apellido_materno');
    	$cliente->fecha_nacimiento=$datos->input('fecha_nacimiento');
    	$cliente->calle=$datos->input('calle');
    	$cliente->numero_exterior=$datos->input('numero_exterior');
    	$cliente->numero_exterior=$datos->input('numero_interior');
    	$cliente->colonia=$datos->input('colonia');
    	$cliente->ciudad=$datos->input('ciudad');
    	$cliente->municipio->input('municipio');
    	$cliente->estado->input('estado');
    	$cliente->foto=$datos->input('foto');
    	$cliente->estado_civil_id->input('estado_civil');
    	$cliente->save();
    	return $cliente;
    }

    public static function consultar()
    {
        $usuario=auth()->user();
        if ($usuario->tipo == Cliente::ADMIN){
            $clientes=DB::table('clientes')
            ->join('users', 'clientes.usuario_id', '=', 'users.id')
            ->join('estados_civiles','clientes.estado_civil_id','=','estados_civiles.id')
            ->select('users.usuario', 'users.email','clientes.*','estados_civiles.nombre as estado_civil')
            ->get();
        }
        else{
            $vendedor=Vendedor::where('usuario_id','=',$usuario->id)->first();
            $clientes=DB::table('clientes')
            ->join('users', 'clientes.usuario_id', '=', 'users.id')
            ->join('vendedores', 'clientes.vendedor_id', '=', 'vendedores.id')
            ->join('estados_civiles','clientes.estado_civil_id','=','estados_civiles.id')
            ->select('users.usuario', 'users.email','clientes.*','estados_civiles.nombre as estado_civil')
            ->where('vendedores.id', '=', $vendedor->id)
            ->get();
        }
        return $clientes;
    }
}
