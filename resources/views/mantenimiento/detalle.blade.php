@extends('layouts.main')
@section('contenido')

<h1>Detalle del mantenimiento {{$mantenimiento->id_mantenimiento}}</h1>
<div class='col-sm-3'>Procesador:</div><div class='col-sm-9'> {{$mantenimiento->tipo_mantenimiento}}</div>
<div class='col-sm-3'>Procesador:</div><div class='col-sm-9'> {{$mantenimiento->fecha_mantenimiento}}</div>
<div class='col-sm-3'>Procesador:</div><div class='col-sm-9'> {{$mantenimiento->descripcion}}</div>


@endsection