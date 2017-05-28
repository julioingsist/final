<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abono;
use App\Prestamo;

class AbonosController extends Controller
{
	public function registrar()
    {
    	$ruta=AdminController::index();
    	$prestamos=Abono::consultarPrestamos();
    	return view('abono.registrar',compact('ruta','prestamos'));
    }

    public function guardar(Request $datos, $prestamo_id)
    {
    	$prestamo=Prestamo::actualizarSaldo($datos,$prestamo_id);
    	$abono=Abono::guardar($datos);
    	Session::flash('mensaje','Se ha guardado el abono con folio: '.$abono->id);
		return back();
    }
}
