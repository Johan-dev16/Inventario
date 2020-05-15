@extends('layouts.main')
@section('title','Ingresar un nuevo mantenimiento')
@section('contenido')


<form action="{{route('mantenimiento.crear')}}">
<div class="form-group row">
    <label for="tipo_mantenimiento" class="col-sm-2 col-form-label col-form-label-sm">Tipo Mantenimiento</label>
    <div class="col-sm-8">
    <input type="text" class="form-control form-control-sm" name="tipo_mantenimiento" id="tipo_mantenimiento" value="{{old('tipo_mantenimiento')}}">
    </div>
</div>

<div class="form-group row">
    <label for="fecha_mantenimiento" class="col-sm-2 col-form-label col-form-label-sm">Fecha Mantenimiento</label>
    <div class="col-sm-8">
    <input type="text" class="form-control form-control-sm" name="fecha_mantenimiento" id="fecha_mantenimiento" value="{{old('fecha_mantenimiento')}}">
    </div>
</div>

<div class="form-group row">
    <label for="descripcion" class="col-sm-2 col-form-label col-form-label-sm">Descripcion</label>
    <div class="col-sm-8">
    <input type="text" class="form-control form-control-sm" name="descripcion" id="descripcion" value="{{old('descripcion')}}">
    </div>
</div>
</form>