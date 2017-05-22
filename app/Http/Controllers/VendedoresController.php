<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use App\Vendedor;
use Session;

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
        $validator=RegisterController::validator($datos->all());
        if ($validator->fails())
        {
            Session::flash('mensaje', $validator->getMessageBag());
            return back();
        }     
        $array=Vendedor::guardar($datos);
        $password=array_pop($array);
        $vendedor=array_pop($array);    
       Session::flash('mensaje', 'Vendedor '.$vendedor->nombre.' guardado exitosamente con la contraseña '.$password);
        return back();
    }

    public static function actualizar(Request $datos,$id)
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
