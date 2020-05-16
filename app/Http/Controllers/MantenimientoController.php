<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\mantenimiento;
class MantenimientoController extends Controller
{
 
    public function inicio()
    {
        return view('mantenimiento.index');
    }

    public function form(){
        return view('mantenimiento.form');
    }

    public function mantenimiento(){
        return view ('mantenimiento.form');
    }
    public function crearMantenimiento(Request $request)
    {
        $MantenimientoNuevo = new App\mantenimiento;
        $MantenimientoNuevo->tipo_mantenimiento = $request->tipo_mantenimiento;
        $MantenimientoNuevo->fecha_mantenimiento = $request->fecha_mantenimiento;        
        $MantenimientoNuevo->descripcion = $request->descripcion;

        $request->validate([
        'tipo_mantenimiento' => 'required'
        ]);
        $MantenimientoNuevo->save(); 
        return redirect('/mantenimiento');
    }

    public function detalle($id){
        $mantenimiento = mantenimiento:: findOrFail($id);
        return view('mantenimiento.detalle', compact('mantenimiento'));
    }
}

