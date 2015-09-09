<?php

namespace WinWin;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $fillable = ['usuario_id', 'nombre', 'nombre_solicitante', 'apellidos_solicitante', 'cantidad', 'descripcion'];
}
