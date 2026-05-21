<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function getAuthPassword()
    {
        return $this->user_password;
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'fk_id_rol', 'id_rol');
    }

    public function ingreso()
    {
    return $this->hasMany(Ingreso::class, 'fk_id_ingreso', 'id_ingreso');
    }

    //relacion de un usuario puede tener muchas huellas derecha y izquierda 
    public function huella_usuario()
    {
    return $this->hasMany(Huella_usuario::class, 'fk_id_huella_usuario', 'id_huella_usuario');
    }

    //relacion de un usuario puede tener muchas novedades
    public function novedad()
    {
    return $this->hasMany(Novedad::class, 'fk_id_novedade', 'id_novedade');
    }

    //relacion de un usuario puede tener muchos tokenrecovery
    public function token_recovery()
    {
    return $this->hasMany(Token_recovery::class, 'fk_id_token', 'id_token');
    }
    
    //relacion de un usuario puede tener muchas novedades
    public function ingreso_equipo()
    {
    return $this->hasMany(Ingreso_equipo::class, 'fk_id_ingreso_equipo', 'id_ingreso_equipo');
    }
}

