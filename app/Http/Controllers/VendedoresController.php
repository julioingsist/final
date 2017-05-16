<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RegisterController;
use App\Vendedor;

class VendedoresController extends Controller
{
    public function registrar()
    {
    	return view('vendedor.registrar');
    }
    
    public function  guardar(Request $datos)
    {
    	$registro=RegisterController::create($datos);
    	$vendedor=new Vendedor();
    	$vendedor->nombre=$datos->input('nombre');
    	
    	
    }

    public function modificarDatos($id)
    {
    	return view('vendedor.editar');
    }
}
