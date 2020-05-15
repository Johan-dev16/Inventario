<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\persona;
use Illuminate\Routing\Controller;
use Symfony\Component\CssSelector\Node\FunctionNode;

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
        return redirect('/personas');

    }

    public function detalle($id){
        $persona = persona:: findOrFail($id);
        return view('persona.detalle', compact('personas'));
    }

    public function inicio($id){
        $persona = persona:: findOrFail($id);
        return view('personas');
    }





















}