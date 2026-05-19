<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Ingreso;
use App\Models\HuellaUsuario;
use App\Models\Novedad;
use App\Models\TokenRecovery;

class ConsultaController extends Controller
{
    public function index()
    {
        $usuario = Usuario::first();

        return [
            'id_usuario' => $usuario->id_usuario,
            'user_name' => $usuario->user_name,
            'user_lastname' => $usuario->user_lastname,
            'user_email' => $usuario->user_email,
            'user_coursenumber' => $usuario->user_coursenumber,
            'user_program' => $usuario->user_program,
            'user_rol' => $usuario->fk_id_role,
        ];
    }
}
