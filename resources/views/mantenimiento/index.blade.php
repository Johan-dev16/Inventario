@extends('layouts.main')
@section('contenido')
@section('title', 'Ver los mantenimientos agendados')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Tipo de mantenimiento</th>
        <th scope="col">Fecha realizacion</th>
        <th scope="col">Descripcion</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach($mantenimiento as $item)
        <tr>
        <td>{{$item->id}}</td>
        <td><a href="{{route('mantenimiento.detalle', $item)}}">
        <td>{{$item->tipo_mantenimiento}}</td>
        <td>{{$item->fecha_mantenimiento}}</td>
        <td>{{$item->descripcion}}</td>
        @endforeach()
      </tr>
    </tbody>
  </table>
@endsection