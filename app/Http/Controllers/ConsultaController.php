<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Ingreso;
use App\Models\HuellaUsuario;
use App\Models\Novedade;
use App\Models\Token_recovery;
use App\Models\Ingreso_equipo;

class ConsultaController extends Controller
{
    /*
    //consulta de un usuario
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
        //consulta de una novedades
    public function index1()
    {
        $novedades = Novedade::find(5);

        return [
            'id_novedades' => $novedades->id_novedades,
            'novedad_title' => $novedades->novedad_title,
            'novedad_body' => $novedades->novedad_body,
            'novedad_datetime' => $novedades->novedad_datetime,
            'fk_id_usuario' => $novedades->fk_id_usuario,
            'novedad_ambiente' => $novedades->novedad_ambiente,
        ];
    } 
    
    //consulta de un rol
    public function index2()
    {
        $roles = Role::find(1);
        return [
        'id_rol' => $roles->id_rol,
        'role_name' => $roles->role_name,
        ];
    }
    //consulta de un ingreso
    public function index3()
    {
        $ingresos = Ingreso::find(1);
        return [
        'id_ingreso' => $ingresos->id_ingreso,
        'ingreso_datetime' => $ingresos->ingreso_datetime,
        'ingreso_place' => $ingresos->ingreso_place,
        'fk_id_usuario' => $ingresos->fk_id_usuario,
        
        ];
    } 
    
    //consulta de un token
    public function index4()
    {
       $tokenes = Token_recovery::find(4);
        return [
            'id_token'=>$tokenes->id_token,
            'token_code'=>$tokenes->token_code,
            'token_exp'=>$tokenes->token_exp,
            'token_used'=>$tokenes->token_used,
            'fk_id_usuario'=>$tokenes->fk_id_usuario,
        
        ];
    }  
        */
public function index5(){
    $equipos= Ingreso_equipo::find(2);
    return [
            'id_ingreso_equipo'=>$equipos->id_ingreso_equipo,
            'fk_id_usuario'=>$equipos->fk_id_usuario,
            'equipo_type'=>$equipos->equipo_type,
            'equipo_brand'=>$equipos->equipo_brand,
            'equipo_model'=>$equipos->equipo_model,
            'equipo_color'=>$equipos->equipo_color,
            'equipo_serial'=>$equipos->equipo_serial,
            'equipo_observations'=>$equipos->equipo_observations,
            'entry_datatime'=>$equipos->entry_datatime,
            'fk_id_usuario'=>$equipos->fk_id_usuario,
            
            
           
    ];
}
}
