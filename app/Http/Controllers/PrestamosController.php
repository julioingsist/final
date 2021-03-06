<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
use App\Cliente;
use Auth;
use Session;

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
        Session::flash('mensaje', 'Se ha guardado la solicitud con folio '.$prestamo->id.' exitosamente.');
        return back();
    }

    public function autorizarPrestamo($id)
    {
        $prestamo=Prestamo::autorizarPrestamo($id);
        Session::flash('mensaje','Se ha autorizado el prestamo con folio: '.$prestamo->id);
        return back();
    }

    public function rechazarPrestamo($id)
    {
        $prestamo=Prestamo::rechazarPrestamo($id);
        Session::flash('mensaje','Se ha rechazado el prestamo con folio: '.$prestamo->id);
        return back();
    }
}
