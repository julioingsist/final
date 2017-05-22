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
        $ruta=AdminController::index();
        return view('prestamo.solicitar',compact('ruta'));
    }

    public function autorizar()
    {
        $prestamos=Prestamo::autorizar();
        $ruta=AdminController::index();
        return view('prestamo.porAutorizar',compact('prestamos','ruta'));
    }

    public function guardar(Request $datos)
    {
        $prestamo=Prestamo::guardar($datos);
        return back();
    }

    public function autorizarPrestamo($id)
    {
        $prestamo=Prestamo::autorizarPrestamo($id);
        return back();
    }
}
