<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mantenimiento;


class MantenimientoController extends Controller
{
 

    public function mantenimiento(){
        $mantenimiento = mantenimiento::Paginate(10);
        return view ('mantenimiento.index', compact('mantenimiento'));
    }
    
    public function form(){
        return view('mantenimiento.form');
    }
    
    public function detalle($id){
        $mantenimiento = mantenimiento:: findOrFail($id);
        return view('mantenimiento.detalle', compact('mantenimiento'));
    }
  
    public function crearMantenimiento(Request $request){
        $MantenimientoNuevo = new mantenimiento;
        $MantenimientoNuevo->tipo_mantenimiento = $request->tipo_mantenimiento;
        $MantenimientoNuevo->fecha_mantenimiento = $request->fecha_mantenimiento;        
        $MantenimientoNuevo->descripcion = $request->descripcion;

        $request->validate([
        'tipo_mantenimiento' => 'required'
        ]);
        $MantenimientoNuevo->save(); 
        return redirect('/mantenimiento');
    }

    public function editar($id){
        $mantenimiento = mantenimiento::findorFail($id);
        return view('mantenimiento.editar', compact('mantenimiento'));
    }

    public function update(Request $request, $id){
        $mantenimientoUpdate = mantenimiento::findOrFail($id);
        $mantenimientoUpdate->tipo_mantenimiento = $request->tipo_mantenimiento;
        $mantenimientoUpdate->fecha_mantenimiento = $request->fecha_mantenimiento;        
        $mantenimientoUpdate->descripcion = $request->descripcion;

        $mantenimientoUpdate->save();

        return redirect('/mantenimiento');


    }





}

