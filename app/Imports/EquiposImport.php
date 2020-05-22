<?php

namespace App\Imports;

use App\Equipo;
use Maatwebsite\Excel\Concerns\ToModel;

class EquiposImport implements ToModel
{
    

    public function model(array $row)
    {
        return new Equipo([
            
            'nombre_equipo'=>$row[0],
            'procesador'=>$row[1],
            'memoria'=>$row[2],
            'placa'=>$row[3],
            'disco'=>$row[4],
            'otros'=>$row[5],
            'fuente'=>$row[6],
            'pantalla'=>$row[7],
            'teclado'=>$row[8],
            'mouse'=>$row[9],
            'sistema_operativo'=>$row[10],
            'office'=>$row[11],
            'otros_programas'=>$row[12],
        ]);
    }
}
