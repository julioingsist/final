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
    
    public function modificarDatos($id)
    {
        return view('vendedor.editar');
    }

    public static function guardar(Request $datos)
    { 
        $vendedor=Vendedor::guardar($datos);
    }

    public function actualizar(Request $datos,$id)
    {
        $vendedor=Vendedor::actualizar($datos,$id);
        return back();
    }

    
}
