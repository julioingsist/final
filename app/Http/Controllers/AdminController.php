<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\vendedor;
use Auth;

class AdminController extends Controller
{
    public static function index()
    {
        if (Auth::guest())
            return view('auth.login');
    	$ruta='';
    	$usuario=Auth::user();
    	if ($usuario->tipo=1){
    		$ruta = 'img/users/tec.jpg';
		}
    	else if ($usuario->tipo=2){
    		$vendedor = Cliente::findWhere('usuario_id',$usuario->id);
    		$ruta = $vendedor->foto;   
    	}
    	else{
    		$cliente = Cliente::where('usuario_id',$usuario->id);
    		$ruta = $vendedor->foto;   	
    	}
    	return $ruta;
    }
}
