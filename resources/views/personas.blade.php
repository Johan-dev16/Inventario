@extends('layouts.main')
@section('contenido')
@section('title', 'Datos del propietario')

        <div>
<form action="{{route('persona.crearPersona')}}" method="POST">
@csrf

@error('nombre')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
    
@enderror
<div>

    <div class="form-group row">
        <label for="nombre" class="col-sm-3 col-form-label col-form-label-sm">Nombre</label>
        <div class="col-sm-8">
        <input type="text" class="form-control form-control-sm" name="nombre" id="nombre" value="{{old('nombre')}}">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="equipo_asignado" class="col-sm-3 col-form-label col-form-label-sm">Equipo Asignado</label>
        <div class="col-sm-8">
        <input type="text" class="form-control form-control-sm" name="equipo_asignado" id="equipo_asignado" value="{{old('equipo_asignado')}}">
        </div>
    </div>
    

    <div class="btn-group sm-2">
  <button class="btn btn-primary" type="submit">Agregar</button>
    </div>
</div>
</form>
        </div>
             <div class="">
                <h1>Detalles de equipos asignados</h1>
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Equipo Asignado</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                @foreach($errors as $item)  
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->equipo_asignado}}</td>
                              </tr>
                              @endforeach
                          </table>
        </div>
@endsection