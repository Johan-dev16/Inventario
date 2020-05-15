@extends('layouts.main')
@section('contenido')
        <h1>Datos de propietario</h1>

        <div>
<form action="{{route('persona.crearPersona')}}" method="POST">
@csrf

@error('nombre')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
@enderror
<div>
    <br>
<input type="text" name="nombre" id="nombre" value=""><span>Nombre</span>
<br>
<input type="text" name="equipo_asignado" id="equipo_asignado" value=""><span>nombre del equipo</span>
<br>
<button class="btn btn-primary btn-block" type="submit">Agregar</button>
</div>
</form>
        </div>
@endsection