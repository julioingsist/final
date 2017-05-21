<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use App\Cliente;
use Auth;

class PrestamosController extends Controller
{
    public function solicitar()
    {
        return view('prestamo.solicitar');
    }

    public function autorizar()
    {
        $prestamos=Prestamo::all();
        return view('prestamo.autorizar',compact('prestamos'));
    }

    public function guardar(Request $datos)
    {
        $prestamo=Prestamo::guardar($datos);
        return back();
    }

    public function autorizarPrestamo($id)
    {
        $prestamo=Prestamo::autorizar($id);
        return back();
    }
}
