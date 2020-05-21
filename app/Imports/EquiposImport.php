<?php

namespace App\Imports;

use App\Equipo;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;

class EquiposImport implements ToModel
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Equipo([
            'id'=>$row[0],
            'nombre_equipo'=>$row[1],
            'precesador'=>$row[2],
            'memoria'=>$row[3],
            'placa'=>$row[4],
            'disco'=>$row[5],
            'otros'=>$row[6],
            'fuente'=>$row[7],
            'pantalla'=>$row[8],
            'teclado'=>$row[9],
            'mouse'=>$row[10],
            'sistema_operativo'=>$row[11],
            'office'=>$row[12],
            'otros_programas'=>$row[13],
        ]);
    }
}
