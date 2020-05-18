@extends('layouts.main')
@section('contenido')
@section('title', 'Ver los mantenimientos agendados')
<div class="row">
  <div class="col-sm-10"></div>
<div class="col-sm-2"><a href="{{route('mantenimiento.form')}}" class="btn btn-primary">Ingresar Nuevo</a></div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo de mantenimiento</th>
        <th scope="col">Fecha realizacion</th>
        <th scope="col">Descripción</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($mantenimiento as $item)
        <tr>
        <td>{{$item ->id_mantenimiento}}</td>
        <td>{{$item ->tipo_mantenimiento}}</td>
        <td>{{$item ->fecha_mantenimiento}}</td>
        <td>{{$item ->descripcion}}</td>
        <td>
          <a href="{{route('mantenimiento.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
        </td>
        @endforeach()
      </tr>
    </tbody>
  </table>
  {{$mantenimiento->links()}}
</div>

@endsection