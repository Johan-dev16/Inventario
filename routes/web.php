<?php

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
    
    
    route::post('/', 'PersonaController@crearPersona')->name('persona.crearPersona');
    route::get('/personas', 'PagesController@persona')->name('personas');
    
    route::get('/mantenimientos', 'PagesController@mantenimiento')->name('mantenimientos');
    
});




