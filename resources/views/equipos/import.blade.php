@extends('layouts.main')
@section('title','Subir Archivo Excel')
@section('contenido')

<form action="{{route('equipos.import')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(Session::has('message'))
<p>{{Session::get('message')}}</p>
    @endif

<div class="form-group">
    <div class="row"> 
        <input type="file" name="file" accept=".xlsx">
        <div class="col-sm-2">
            <button type="submit" class="btn btn-success">Enviar informacion</button>
        </div>
        </div>
        <div class="row">
            <div class="col-sm-2"><a href="{{route('equipos')}}" class="btn btn-warning">Volver al menu de equipos</a></div>
            </div>
</div>
 
</form>

@endsection