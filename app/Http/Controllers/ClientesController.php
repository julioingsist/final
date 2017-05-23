<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Cliente;
use Session;

class ClientesController extends Controller
{
    public function registrar()
    {
        $ruta=AdminController::index();
    	return view('cliente.registrar', compact('ruta'));
    }
    
    public function guardar(Request $datos)
    {
    	$validator=RegisterController::validator($datos->all());
        if ($validator->fails())
        {
            Session::flash('mensaje_error', $validator->getMessageBag());
            return back();
        }     
        $array=Cliente::guardar($datos);
        $password=array_pop($array);
        $cliente=array_pop($array);    
       Session::flash('mensaje', 'Cliente '.$cliente->nombre.' guardado exitosamente con la contraseña '.$password);
        return back();
    }

    public function modificarDatos($id)
    {
    	return view('cliente.editar');
    }

    public function actualizar(Request $datos,$id)
    {
    	$cliente=Cliente::actualizar($datos,$id);
    	return back();
    }

    public function consultarClientes()
    {
        $ruta=AdminController::index();
        $clientes=Cliente::consultar(); 
        return view('cliente.catalogoClientes', compact('clientes','ruta'));
    }

    public function habilitar($id)
    {

    }
}
