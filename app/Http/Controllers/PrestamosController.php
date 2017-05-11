<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    public function solicitar()
    {
    	return view('prestamo.solicitar');
    }
}
