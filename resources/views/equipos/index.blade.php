
@extends('layouts.main')
@section('title','Listado de equipos')
@section('contenido')
<div class="row">
  <div class="col-sm-12"></div>
  <div class="col-sm--2"><a href="{{route('equipos.importview')}}" class="btn btn-warning">Subir reporte</a></div>
  <div class="col-sm--4"><a href="{{route('equipos.generarReporte')}}" class="btn btn-success">Generar reporte</a></div>
<div class="col-sm-3"><a href="{{route('equipos.form')}}" class="btn btn-primary">Ingresar Nuevo</a></div>
</div>
<div class="table-responsive">
      <table class="table">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Nombre equipo</th>
          <th scope="col">Procesador</th>
          <th scope="col">Memoria</th>
          <th scope="col">placa</th>
          <th scope="col">disco</th>
          <th scope="col">otros</th>
          <th scope="col">Fuente</th>
          <th scope="col">Pantalla</th>
          <th scope="col">Teclado</th>
          <th scope="col">Mouse</th>
          <th scope="col">Sistema Operativo</th>
          <th scope="col">Office</th>
          <th scope="col">Otros programas</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($equipo as $item)
        <tr>
          <td>{{$item->id}}</td>
        <td><a href="{{route('equipos.detalle', $item)}}">
          {{$item->nombre_equipo}}  
          </a></td>        
          <td>{{$item->procesador}}</td>
          <td>{{$item->memoria}}</td>
          <td>{{$item->placa}}</td>
          <td>{{$item->disco}}</td>
          <td>{{$item->otros}}</td>
          <td>{{$item->fuente}}</td>
          <td>{{$item->pantalla}}</td>
          <td>{{$item->teclado}}</td>
          <td>{{$item->mouse}}</td>
          <td>{{$item->sistema_operativo}}</td>
          <td>{{$item->office}}</td>
          <td>{{$item->otros_programas}}</td>
          <td>
          <a href="{{route('equipos.editar', $item)}}" class="btn btn-warning btn-sm">Editar</a>
          </td>
        </tr>
        @endforeach()
        </tr>
      </tbody>
    </table>
  </div>
      {{$equipo->links()}}
@endsection