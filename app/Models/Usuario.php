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
    return $this->hasMany(Ingreso::class, 'fk_id_usuario', 'id_usuario');
    }

    //relacion de un usuario puede tener muchas huellas derecha y izquierda 
    public function huellaUsuario()
    {
    return $this->hasMany(HuellaUsuario::class, 'fk_id_usuario', 'id_usuario');
    }

    //relacion de un usuario puede tener muchas novedades
    public function novedad()
    {
    return $this->hasMany(Novedad::class, 'fk_id_usuario', 'id_usuario');
    }

    //relacion de un usuario puede tener muchos tokenrecovery
    public function tokenRecovery()
    {
    return $this->hasMany(TokenRecovery::class, 'fk_id_usuario', 'id_usuario');
    }
    
    // Relacion de muchos usuarios tienen un rol 
    public function rol()
    {
    return $this->hasMany(Role::class, 'fk_id_usuario', 'id_usuario');
    }
}

