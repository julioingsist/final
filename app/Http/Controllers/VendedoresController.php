<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RegisterController;
use App\Vendedor;

class VendedoresController extends Controller
{
    public function registrar()
    {
        $ruta=AdminController::index();
        return view('vendedor.registrar', compact('ruta'));
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

    public static function consultarVendedores()
    {
        $ruta=AdminController::index();
        $vendedores=Vendedor::consultar();
        return view('vendedor.catalogoVendedores',compact('ruta','vendedores'));    
    }
}
