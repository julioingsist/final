<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Controllers\RegisterController;

class ClientesController extends Controller
{
    public function registrar()
    {
    	return view('cliente.registrar');
    }
    
    public function guardar(Request $datos)
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
    	$cliente->colonia=$datos->input('colonia');
    	$cliente->ciudad=$datos->input('ciudad');
    	$cliente->municipio_id->input('municipio');
    	$cliente->estado_id->input('estado')
    	$cliente->foto=$datos->input('foto');
    	$cliente->estado_civil_id->input('estado_civil');
    	$cliente->usuario_id->$usuario->id;
 	
    }

    public function actualizar(Request $datos,$id)
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
    	$cliente->municipio_id->input('municipio');
    	$cliente->estado_id->input('estado')
    	$cliente->foto=$datos->input('foto');
    	$cliente->estado_civil_id->input('estado_civil');
    }

    public function modificarDatos($id)
    {
    	return view('cliente.editar');
    }
}
