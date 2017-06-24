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
        $vendedor='';
    	$usuario=Auth::user();
    	if ($usuario->tipo==1){
    		$ruta = 'img/users/tec.jpg';
		}
    	else if ($usuario->tipo==2){
    		$vendedor = Vendedor::where('usuario_id',$usuario->id)->first();
    		$ruta = $vendedor->foto;   
    	}
    	else if ($usuario->tipo==3){
    		$cliente = Cliente::where('usuario_id',$usuario->id)->first();
    		$ruta = $cliente->foto;   	
    	}
    	return $ruta;
    }
}
