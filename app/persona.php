<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{

    protected $primarykey = 'id';

    public function persona()
    {
        return $this->hasOne(equipo::class);//Un equipo solo puede pertenecer a una persona
       }
}
