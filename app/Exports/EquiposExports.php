<?php

namespace App\Exports;

use App\equipo;
use Maatwebsite\Excel\Concerns\FromCollection;

class EquiposExports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return equipo::all();
    }
}
