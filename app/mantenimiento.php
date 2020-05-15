<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mantenimiento extends Model
{
    public function mantenimiento()
    {
        return $this->belongsTo(equipo::class);//Un equipo puede tener varios mantenimientos
    }
}
