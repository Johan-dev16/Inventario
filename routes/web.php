<?php

use App\Http\Controllers\MantenimientoController;
use App\mantenimiento;
use Illuminate\Support\Facades\Route;

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
    route::put('/editar/{id}', 'EquiposController@update')->name('equipos.update');    
    
    


    route::get('/mantenimiento', 'MantenimientoController@mantenimiento')->name('mantenimiento');
    // route::get('/mantenimiento', 'MantenimientoController@detalle')->name('mantenimiento.detalle')->where('id','[0-9]+');
    route::get('/mantenimiento/form', 'MantenimientoController@form')->name('mantenimiento.form');
    route::post('/mantenimiento/crear', 'MantenimientoController@crearMantenimiento')->name('mantenimiento.crearMantenimiento');
    route::get('/mantenimiento/editar/{id}', 'MantenimientoController@editar')->name('mantenimiento.editar');
    route::put('/editar/{id}', 'MantenimientoController@update')->name('mantenimiento.update');




    route::get('/personas', 'PersonaController@persona')->name('personas');
    route::get('/personas/{id}', 'PersonaController@detalle')->name('persona.detalle');
    route::get('/form', 'PersonaController@form')->name('personas.form');
    route::post('/', 'PersonaController@crearPersona')->name('persona.crearPersona');
    route::get('/editar/{id}', 'PersonaController@editar')->name('personas.editar');
    route::put('/editar/{id}', 'PersonaController@update')->name('persona.update');



    
});




