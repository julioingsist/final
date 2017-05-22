<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\RegisterController;
use DateTime;
use Illuminate\Support\Facades\DB;

class Vendedor extends Model  
{
    const ESTATUS_ACTIVO = 1;
    const ESTATUS_INACTIVO = 0;
    protected $table = "vendedores";

    public static function guardar(Request $datos)
    { 
        $password=str_random(8);
        $datos['password']=$password;
        $usuario=RegisterController::create($datos->all());
        $vendedor=new Vendedor();
        $vendedor->nombre=$datos->input('nombre');
        $vendedor->apellido_paterno=$datos->input('apellido_paterno');
        $vendedor->apellido_materno=$datos->input('apellido_materno');
        $vendedor->usuario_id=$usuario->id;
        $fecha = new DateTime();
        $vendedor->estatus=Vendedor::ESTATUS_ACTIVO;    
        $vendedor->created_at=$fecha->format('Y-m-d H:i:s');
        $vendedor->updated_at=$fecha->format('Y-m-d H:i:s');
        $vendedor->save();
        return compact('vendedor','password');
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

    public static function consultar()
    {
        $vendedores=DB::table('vendedores')
            ->join('users', 'vendedores.usuario_id', '=', 'users.id')
            ->select('users.usuario', 'users.email','vendedores.*')
            ->get();
        return $vendedores;
    }
}
