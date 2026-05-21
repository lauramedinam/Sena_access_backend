<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Ingreso;
use App\Models\HuellaUsuario;
use App\Models\Novedade;
use App\Models\TokenRecovery;

class ConsultaController extends Controller
{
    /*
    public function index()
    {
        $usuario = Usuario::find(1);

        return [
            'id_usuario' => $usuario->id_usuario,
            'usuario_name' => $usuario->usuario_name,
            'usuario_identificacion' => $usuario->usuario_identificacion,
            'usuario_lastname' => $usuario->usuario_lastname,
            'usuario_email' => $usuario->usuario_email,
            'usuario_password' => $usuario->usuario_password,
            'usuario_coursenumber' =>$usuario->usuario_coursenumber,
            'usuario_program' => $usuario->usuario_program,
            'fk_id_rol' => $usuario->fk_id_rol,
            'profile_photo_path' => $usuario->profile_photo_path,

        ];
    }
        */
    public function index1()
    {
        $novedades = Novedade::find(1);

        return [
            'id_novedades' => $novedades->id_novedades,
            'novedad_title' => $novedades->novedad_title,
            'novedad_body' => $novedades->novedad_body,
            'novedad_datetime' => $novedades->novedad_datetime,
            'fk_id_usuario' => $novedades->fk_id_usuario,
            'novedad_ambiente' => $novedades->novedad_ambiente,
        ];
    }

}
