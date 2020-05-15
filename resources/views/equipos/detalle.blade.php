@extends('layouts.main')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>Detalles del equipo: {{$equipo->nombre_equipo}}</h2>
        </div>
        <div class='col-sm-3'>Procesador:</div><div class='col-sm-9'> {{$equipo->procesador}}</div>
        <div class='col-sm-3'>Memoria:</div><div class='col-sm-9'> {{$equipo->memoria}}</div>
        <div class='col-sm-3'>Placa:</div><div class='col-sm-9'> {{$equipo->placa}}</div>
        <div class='col-sm-3'>Disco:</div><div class='col-sm-9'> {{$equipo->disco}}</div>
        <div class='col-sm-3'>Otros:</div><div class='col-sm-9'> {{$equipo->otros}}</div>
        <div class='col-sm-3'>Fuente:</div><div class='col-sm-9'> {{$equipo->fuente}}</div>
        <div class='col-sm-3'>Pantalla:</div><div class='col-sm-9'> {{$equipo->pantalla}}</div>
        <div class='col-sm-3'>Teclado:</div><div class='col-sm-9'> {{$equipo->teclado}}</div>
        <div class='col-sm-3'>Mouse:</div><div class='col-sm-9'> {{$equipo->mouse}}</div>
        <div class='col-sm-3'>Sistema operativo:</div><div class='col-sm-9'> {{$equipo->sistema_operativo}}</div>
        <div class='col-sm-3'>Office:</div><div class='col-sm-9'> {{$equipo->office}}</div>
        <div class='col-sm-3'>Otros Programas:</div><div class='col-sm-9'> {{$equipo->otros_programas}}</div>
        <div class='col-sm-3'></div><div class='col-sm-9'><a class="btn btn-primary" href="{{route ('equipos')}}">Volver al Listado</a></div>
    </div>

    
</div>

@endsection