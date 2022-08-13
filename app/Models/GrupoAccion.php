<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoAccion extends Model
{
    use HasFactory;
    protected $table = 'GrupoAccion';
    protected $fillable = ['id', 'Nombre', 'FechaAccion', 'TipoAccion'];

    public function acciones()
    {
        return $this->hasMany(Accion::class, 'GrupoAccion');
    }
}
