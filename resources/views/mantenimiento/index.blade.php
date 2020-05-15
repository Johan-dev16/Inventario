@extends('layouts.main')
@section('contenido')

<form action="{{route('mantenimiento.crear')}}">
<div class="form-group row">
    <label for="tipo_mantenimiento" class="col-sm-2 col-form-label">Tipo Mantenimiento</label>
    <div class="col-sm-10">
      <input type="tipo_mantenimiento" class="form-control" id="tipo_mantenimiento">
    </div>
  </div>
</form>