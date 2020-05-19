@extends('layouts.main')
@section('title','Editar a: '.$persona->nombre)
@section('contenido')
<form action="{{route('persona.update', $persona->id)}}" method="POST">
@method('PUT')
@csrf
<div class="form-group row">
    <label for="nombre" class="col-sm-2 col-form-label col-form-label-sm">Nombre</label>
    <div class="col-sm-8">
    <input type="text" class="form-control form-control-sm" name="nombre" id="nombre" value="{{$persona->nombre}}">
    </div>
</div>

<div class="form-group row">
    <label for="equipo_asignado" class="col-sm-2 col-form-label col-form-label-sm">Equipo Asignado</label>
    <div class="col-sm-8">
    <input type="text" class="form-control form-control-sm" name="equipo_asignado" id="equipo_asignado" value="{{$persona->equipo_asignado}}">
    </div>

</div>

    <div class="row">
    <div class="btn-group sm-2">
        <button class="btn btn-primary" type="submit">Editar</button>
          </div>
        <div class="btn-group sm-2">
            <button class="btn btn-danger" type="submit" {{Route('personas') }}>Cancelar</button>
              </div>
        </div>
</form>
@endsection