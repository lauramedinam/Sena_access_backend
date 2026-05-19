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
        $usuario = Usuario::find(); 
        return[
            'user_identification' => $usuario->usuario_identificacion,
            'user_name' => $usuario->usuario_name,
            'user_lastname' => $usuario->usuario_lastname,
            'user_email' => $usuario->usuario_email,
            'user_coursenumber' => $usuario->usuario_coursenumber,
            'user_program' => $usuario->usuario_program,
            'user_rol' => $usuario->fk_id_rol,
        ]
    }

}
