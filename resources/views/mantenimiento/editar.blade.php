@extends('layouts.main')
@section('title','Editar Mantenimiento Numero: '.$mantenimiento->id_mantenimiento)
@section('contenido')
<form action="{{route('mantenimiento.update', $mantenimiento->id_mantenimiento)}}" method="POST">
@method('PUT')
@csrf

<div class="form-group row">
    <label for="tipo_mantenimiento" class="col-sm-2 col-form-label col-form-label-sm">Tipo mantenimiento</label>
    <div class="col-sm-8">
    <input type="text" class="form-control form-control-sm" name="tipo_mantenimiento" id="tipo_mantenimiento" value="{{$mantenimiento->tipo_mantenimiento}}">
    </div>
</div>

<div class="form-group row">
    <label for="fecha_mantenimiento" class="col-sm-2 col-form-label col-form-label-sm">Fecha Mantenimiento</label>
    <div class="col-sm-8">
    <input type="text" class="form-control form-control-sm" name="fecha_mantenimiento" id="fecha_mantenimiento" value="{{$mantenimiento->fecha_mantenimiento}}">
    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-sm-2 col-form-label col-form-label-sm">Descripcion</label>
    <div class="col-sm-8">
    <input type="text" class="form-control form-control-sm" name="descripcion" id="descripcion" value="{{$mantenimiento->descripcion}}">
    </div>
</div>


<div class="form-group row">
    <div class="col-sm-6"></div>
    <div class="col-sm-2">
        <a href="{{route('mantenimiento')}}" class="btn btn-danger btn-block">Cancelar</a>
        </div>
    <div class="col-sm-2">
        <button class="btn btn-primary btn-block" type="submit">Editar</button>
    </div>
</form>     
@endsection 