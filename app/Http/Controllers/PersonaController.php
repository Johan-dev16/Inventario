<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\persona;
use Illuminate\Routing\Controller;


class PersonaController extends Controller
{

    public function persona(){
        $persona = persona::Paginate(10);
        return view ('personas.index', compact('persona'));
    }

    public function form(){
        return view ('personas.form');
    }

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
        return view('persona.detalle', compact('persona'));
    }

    public function inicio($id){
        $persona = persona:: findorFail($id);
        return view('personas');
    }

    public function editar(Request $request, $id){
        $persona = persona::findOrFail($id);
        return view('personas.editar', compact('persona'));
    }

    public function update(){
        
    }




















}