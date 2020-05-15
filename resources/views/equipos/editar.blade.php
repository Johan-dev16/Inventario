@extends('layouts.main')
@section('title','Editar Equipo '.$equipo->nombre_equipo)
@section('contenido')
<form action="{{route('equipos.update', $equipo->id)}}" method="POST">
@method('PUT')
@csrf
@error('nombre_equipo')
    <div class="alert alert-danger">
        El nombre es obligatorio
    </div>
@enderror
<div>

    <input type="hidden" name="id" id="id" value="{{$equipo->id}}">

    <div class="form-group row">
        <label for="nombre_equipo" class="col-sm-2 col-form-label col-form-label-sm">Nombre Equipo</label>
        <div class="col-sm-8">
        <input type="text" class="form-control form-control-sm" name="nombre_equipo" id="nombre_equipo" value="{{$equipo->nombre_equipo}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="procesador" class="col-sm-2 col-form-label col-form-label-sm">Procesador</label>
        <div class="col-sm-8">
        <input type="text" class="form-control form-control-sm" name="procesador" id="procesador" value="{{$equipo->procesador}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="memoria" class="col-sm-2 col-form-label col-form-label-sm">Memoria</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="memoria" id="memoria" value="{{$equipo->memoria}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="placa" class="col-sm-2 col-form-label col-form-label-sm">Placa</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="placa" id="placa" value="{{$equipo->placa}}">
        </div>
    </div>

    
    <div class="form-group row">
        <label for="disco" class="col-sm-2 col-form-label col-form-label-sm">Disco</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="disco" id="disco" value="{{$equipo->disco}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="otros" class="col-sm-2 col-form-label col-form-label-sm">Otros</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="otros" id="otros" value="{{$equipo->otros}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="fuente" class="col-sm-2 col-form-label col-form-label-sm">Fuente</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="fuente" id="fuente" value="{{$equipo->fuente}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="pantalla" class="col-sm-2 col-form-label col-form-label-sm">Pantalla</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="pantalla" id="pantalla" value="{{$equipo->pantalla}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="teclado" class="col-sm-2 col-form-label col-form-label-sm">Teclado</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="teclado" id="teclado" value="{{$equipo->teclado}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="mouse" class="col-sm-2 col-form-label col-form-label-sm">Mouse</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="mouse" id="mouse" value="{{$equipo->mouse}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="sistema_operativo" class="col-sm-2 col-form-label col-form-label-sm">Sistema Operativo</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="sistema_operativo" id="sistema_operativo" value="{{$equipo->sistema_operativo}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="office" class="col-sm-2 col-form-label col-form-label-sm">Office</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="office" id="office" value="{{$equipo->office}}">
        </div>
    </div>
 
    <div class="form-group row">
        <label for="otros_programas" class="col-sm-2 col-form-label col-form-label-sm">Otros Programas</label>
        <div class="col-sm-8">
            <input type="text"class="form-control form-control-sm"  name="otros_programas" id="otros_programas" value="{{$equipo->otros_programas}}">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-6"></div>
        <div class="col-sm-2">
            <a href="{{route('equipos')}}" class="btn btn-danger btn-block">Cancelar</a>
            </div>
        <div class="col-sm-2">
            <button class="btn btn-primary btn-block" type="submit">Editar</button>
        </div>
    </div>
        





















</form>
@endsection