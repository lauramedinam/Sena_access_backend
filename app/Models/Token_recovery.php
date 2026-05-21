<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token_recovery extends Model
{
    use HasFactory;
    protected $table = 'token_recoveries';
    protected $primaryKey = 'id_token';
     public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_id_usuario', 'id_usuario');
    }
}
