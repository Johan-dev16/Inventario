@extends('layouts.main')
@section('contenido')
@section('title', 'Detalles de equipos asignados')
  <div class="row">
  <div class="col-sm-10"></div>
<div class="col-sm-2"><a href="{{route('personas.form')}}" class="btn btn-primary">Ingresar Nuevo</a></div>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Equipo asignado</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($persona as $item)
        <tr>
        <td>{{$item ->id}}</td>
        <td>{{$item ->nombre}}</td>
        <td>{{$item ->equipo_asignado}}</td>
        <td>
          <a href="{{route('personas.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
        </td>
        @endforeach()
      </tr>
    </tbody>
  </table>
  {{-- {{$persona->links()}} --}}
</div>
@endsection

   