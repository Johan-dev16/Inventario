<?php

namespace App\Exports;

use App\\user;
use Maatwebsite\Excel\Concerns\FromCollection;

class EquipoExports implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return user::all();
    }
}
