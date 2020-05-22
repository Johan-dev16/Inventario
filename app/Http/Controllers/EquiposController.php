<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\equipo;
use App\Exports\EquiposExports;
use App\Imports\EquiposImport;
use Maatwebsite\Excel\Facades\Excel;



class EquiposController extends Controller
{
    private $excel;

    public function inicio()
    {    
        $equipo = Equipo::paginate(10);
        return view('equipos.index', compact('equipo'));
    }

    public function form()
    {
        return view('equipos.form');
    }
    
    public function detalle($id)
    {
        $equipo= Equipo::findorFail($id);
        return view('equipos.detalle', compact('equipo'));
    }

    public function crear(Request $request)
    {
       // return $request->all();

        $request->validate([
            'nombre_equipo' => 'required'
        ]);

       $equipoNuevo= new Equipo;
       $equipoNuevo->id =$request->id;
       $equipoNuevo->nombre_equipo =$request->nombre_equipo;
       $equipoNuevo->procesador =$request->procesador;
       $equipoNuevo->memoria =$request->memoria;
       $equipoNuevo->placa =$request->placa;
       $equipoNuevo->disco =$request->disco;
       $equipoNuevo->otros =$request->otros;
       $equipoNuevo->fuente =$request->fuente;
       $equipoNuevo->pantalla =$request->pantalla;
       $equipoNuevo->teclado =$request->teclado;
       $equipoNuevo->mouse =$request->mouse;
       $equipoNuevo->sistema_operativo =$request->sistema_operativo;
       $equipoNuevo->office =$request->office;
       $equipoNuevo->otros_programas =$request->otros_programas;
      $equipoNuevo->save();
     return back();

    }

    public function editar($id)
    {
        $equipo= Equipo::findorFail($id);
        return view('equipos.editar', compact('equipo'));

    }

    public function update(Request $request, $id)
    {

            $equipoUpdate = Equipo::findOrFail($id);
            $equipoUpdate->id =$request->id;
            $equipoUpdate->nombre_equipo =$request->nombre_equipo;
            $equipoUpdate->procesador =$request->procesador;
            $equipoUpdate->memoria =$request->memoria;
            $equipoUpdate->placa =$request->placa;
            $equipoUpdate->disco =$request->disco;
            $equipoUpdate->otros =$request->otros;
            $equipoUpdate->fuente =$request->fuente;
            $equipoUpdate->pantalla =$request->pantalla;
            $equipoUpdate->teclado =$request->teclado;
            $equipoUpdate->mouse =$request->mouse;
            $equipoUpdate->sistema_operativo =$request->sistema_operativo;
            $equipoUpdate->office =$request->office;
            $equipoUpdate->otros_programas =$request->otros_programas;

            $equipoUpdate->save();

            return redirect('/equipos');
    }

    
    public function importview()
    {
        return view('equipos/import');
    }

    public function generarReporte()
    {
        return Excel::download(new EquiposExports, 'Equipos.xlsx');
    }


    public function import(Request $request)
    {
        $file = $request->file('file');
        Excel::import(new EquiposImport, $file);
        return redirect('/equipos')->with('message', 'Importacion correcta de equipos');
    }

    
}
