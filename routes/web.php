<?php

use App\Http\Controllers\MantenimientoController;
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
    
    


    route::get('/index', 'MantenimientoController@inicio')->name('mantenimientos');
    route::post('/form', 'MantenimientoController@crearMantenimiento')->name('mantenimiento.crearMantenimiento');
    route::get('/mantenimiento', 'MantenimientoController@mantenimiento')->name('mantenimiento');
    route::get('/mantenimiento/{id}', 'MantenimientoController@detalle')->name('mantenimiento.detalle')->where('id','[0-9]+');    




    route::post('/', 'PersonaController@crearPersona')->name('persona.crearPersona');
    route::get('/personas', 'PagesController@persona')->name('personas');
    route::get('/personas/{id}', 'PersonaController@detalle')->name('persona.detalle');

});




