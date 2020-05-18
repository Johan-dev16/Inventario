@extends('layouts.main')
@section('contenido')
@section('title', 'Menu de mantenimiento')

<form action="{{route('mantenimiento.crearMantenimiento')}}" method="POST">
    @csrf
    <div>
        @error('tipo_mantenimiento')
    <div class="alert alert-danger">
        Debe ingresar el tipo de mantenimiento
    </div>
    
@enderror
       
    </div>
    <div class="form-group row">
        <label for="tipo_mantenimiento" class="col-sm-2 col-form-label col-form-label-sm">Tipo Mantenimiento</label>
        <div class="col-sm-8">
        <input type="text" class="form-control form-control-sm" name="tipo_mantenimiento" id="tipo_mantenimiento" value="{{old('tipo_mantenimiento')}}">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="fecha_mantenimiento" class="col-sm-2 col-form-label col-form-label-sm">Fecha Mantenimiento</label>
        <div class="col-sm-8">
        <input type="date" class="form-control form-control-sm" name="fecha_mantenimiento" id="fecha_mantenimiento" value="{{old('fecha_mantenimiento')}}">
        </div>
    </div>
    
    <div class="form-group row">
        <label for="descripcion" class="col-sm-2 col-form-label col-form-label-sm">Descripcion</label>
        <div class="col-sm-8">
        <input type="text" class="form-control form-control-sm" name="descripcion" id="descripcion" value="{{old('descripcion')}}">
        </div>
    </div>

    <div class="btn-group sm-2">
        <button class="btn btn-primary" type="submit">Agregar</button>
          </div>

         
    </form>
    <div class="row"> 
        <div class="col-sm-11">
        {{-- <button class="btn btn-warning" type="submit">Ver mantenimientos</button> --}}
        <a href="{{route('mantenimiento')}}" class="btn btn-warning">Ver Mantenimientos</a>
        </div>
    </div>
@endsection