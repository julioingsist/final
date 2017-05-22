<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cliente extends Model
{
    protected $table = "clientes";
    CONST ADMIN = 1;
    CONST VENDEDOR = 2;
    CONST CLIENTE = 3;

    public static function guardar(Request $datos)
    {
    	$usuario=RegisterController::create($datos);
    	$cliente=new Cliente();
    	$cliente->nombre=$datos->input('nombre');
    	$cliente->apellido_paterno=$datos->input('apellido_paterno');
    	$cliente->apellido_materno=$datos->input('apellido_materno');
    	$cliente->fecha_nacimiento=$datos->input('fecha_nacimiento');
    	$cliente->calle=$datos->input('calle');
    	$cliente->numero_exterior=$datos->input('numero_exterior');
    	$cliente->numero_exterior=$datos->input('numero_interior');
        $cliente->telefono=$datos->input('telefono');
    	$cliente->colonia=$datos->input('colonia');
    	$cliente->ciudad=$datos->input('ciudad');
    	$cliente->municipio->input('municipio');
    	$cliente->estado->input('estado');
    	$cliente->foto=$datos->input('foto');
    	$cliente->estado_civil_id->input('estado_civil');
    	$cliente->usuario_id->$usuario->id;
        $vendedor=Vendedor::where('usuario_id', '=', Auth()->user()->id)->first();
        $cliente->vendedor_id=$vendedor->id;
 		$cliente->save();
 		return $cliente;
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
            ->select('users.usuario', 'users.email','clientes.*')
            ->get();
        }
        else{
            $vendedor=Vendedor::where('usuario_id','=',$usuario->id)->first();
            $clientes=DB::table('clientes')
            ->join('users', 'clientes.usuario_id', '=', 'users.id')
            ->select('users.usuario', 'users.email','clientes.*')
            ->where('vendedores.id', '=', $vendedor->id)
            ->get();
        }
        return $clientes;
    }
}
