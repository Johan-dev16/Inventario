<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Routing\Controller;

class PersonaController extends Controller
{

    public function crearPersona(Request $request)
    {
        $personaNueva = new App\persona;
        $personaNueva->nombre = $request->nombre;
        $personaNueva->equipo_asignado = $request->equipo_asignado;

        $request->validate([
        'nombre' => 'required'
        ]);
        $personaNueva->save(); 
    }
























}