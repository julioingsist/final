<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    protected $table = "vendedores";

    public static function guardar(Request $datos)
    { 
        $usuario=RegisterController::create($datos);
        $vendedor=new Vendedor();
        $vendedor->apellido_paterno=$datos->input('apellido_paterno');
        $vendedor->nombre=$datos->input('nombre');
        $vendedor->apellido_materno=$datos->input('apellido_materno');
        $vendedor->fecha_nacimiento=$datos->input('fecha_nacimiento');
        $vendedor->calle=$datos->input('calle');
        $vendedor->numero_exterior=$datos->input('numero_exterior');
        $vendedor->numero_exterior=$datos->input('numero_interior');
        $vendedor->colonia=$datos->input('colonia');
        $vendedor->ciudad=$datos->input('ciudad');
        $vendedor->municipio->input('municipio');
        $vendedor->estado->input('estado');
        $vendedor->foto=$datos->input('foto');
        $vendedor->usuario_id->$usuario->id;
        $vendedor->save();
        return $vendedor;
    }

    public function actualizar(Request $datos,$id)
    {
        $vendedor=Vendedor::find($id);
        $vendedor->nombre=$datos->input('nombre');
        $vendedor->apellido_paterno=$datos->input('apellido_paterno');
        $vendedor->apellido_materno=$datos->input('apellido_materno');
        $vendedor->fecha_nacimiento=$datos->input('fecha_nacimiento');
        $vendedor->calle=$datos->input('calle');
        $vendedor->numero_exterior=$datos->input('numero_exterior');
        $vendedor->numero_exterior=$datos->input('numero_interior');
        $vendedor->colonia=$datos->input('colonia');
        $vendedor->ciudad=$datos->input('ciudad');
        $vendedor->municipio_id->input('municipio');
        $vendedor->estado_id->input('estado');
        $vendedor->foto=$datos->input('foto');
        $vendedor->save();
        return $vendedor;
    }
}
