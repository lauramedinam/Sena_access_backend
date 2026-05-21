<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso_equipo extends Model
{
    use HasFactory;
    protected $table = 'ingreso_equipos';
    protected $primaryKey = 'id_ingreso_equipo';

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_id_usuario', 'id_usuario');
    }
    
}
