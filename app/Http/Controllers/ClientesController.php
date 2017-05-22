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
    	$cliente=Cliente::guardar($datos);
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
        return view('cliente.catalogoClientes',compact('clientes','ruta'));
    }
}
