<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
        protected $primary_key  = 'id';
        protected $fillable =['id','nombre_equipo', 'procesador', 'memoria','placa','disco','otros',
        'fuente', 'pantalla', 'teclado', 'mouse', 'sistema_operativo', 'office', 'otros_programas'];
        protected $guarded = [];
}
