<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MantenimientoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EquiposController;
use App\mantenimiento;

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function()
{      
    Route::get('/equipos','EquiposController@inicio')->name('equipos');
    Route::get('/equipos/{id}','EquiposController@detalle')->name('equipos.detalle')->where('id', '[0-9]+');
    Route::get('/equipos/form','EquiposController@form')->name('equipos.form');
    Route::post('/equipos/crear','EquiposController@crear')->name('equipos.crear');
    route::get('/equipos/editar/{id}', 'EquiposController@editar')->name('equipos.editar');
    route::put('/equipos/editar/{id}', 'EquiposController@update')->name('equipos.update');
    route::get('/equipos/descargar', 'EquiposController@generarReporte')->name('equipos.generarReporte');
    route::get('/equipos/import', 'EquiposController@importview')->name('equipos.importview');
    route::post('/equipos/importar', 'EquiposController@import')->name('equipos.import');


    route::get('/mantenimiento', 'MantenimientoController@mantenimiento')->name('mantenimiento');
    // route::get('/mantenimiento/{id}', 'MantenimientoController@detalle')->name('mantenimiento.detalle')->where('id','[0-9]+');
    route::get('/mantenimiento/form', 'MantenimientoController@form')->name('mantenimiento.form');
    route::post('/mantenimiento/crear', 'MantenimientoController@crearMantenimiento')->name('mantenimiento.crearMantenimiento');
    route::get('/mantenimiento/editar/{id}', 'MantenimientoController@editar')->name('mantenimiento.editar');
    route::put('/mantenimiento/editar/{id}', 'MantenimientoController@update')->name('mantenimiento.update');




    
    route::get('/personas', 'PersonaController@persona')->name('personas');
    route::get('/personas/{id}', 'PersonaController@detalle')->name('persona.detalle');
    route::get('/form', 'PersonaController@form')->name('personas.form');
    route::post('/', 'PersonaController@crearPersona')->name('persona.crearPersona');
    route::get('/personas/editar/{id}', 'PersonaController@editar')->name('personas.editar');
    route::put('/personas/editar/{id}', 'PersonaController@update')->name('persona.update');


    

    
});




