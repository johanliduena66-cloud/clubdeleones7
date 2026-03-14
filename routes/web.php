<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});


Route::resource('roles', 'RoleController')->middleware('auth');*/

Route::resource('videos', 'App\Http\Controllers\VideoController')->middleware('auth');

Route::resource('usuarios', 'App\Http\Controllers\UserController')->middleware('auth');

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::resource('inicio', 'App\Http\Controllers\InicioController');
/*
Route::resource('personas', 'PersonaController')->middleware('auth');
Route::put('personas/actualizar/{id}','PersonaController@update');
Route::post('personas/crear','PersonaController@store');
Route::delete('eliminarpersonas/{id}', 'PersonaController@destroy')
    ->name('personas.destroy');*/

Route::get('index', 'App\Http\Controllers\InicioController@index')->middleware('auth');
//Route::get('index', 'App\Http\Controllers\InicioController@index');
Route::resource('presidentes', 'App\Http\Controllers\PresidenteController')->middleware('auth');
Route::resource('actividades', 'App\Http\Controllers\ActividadController')->middleware('auth');
Route::resource('galerias', 'App\Http\Controllers\GaleriaController')->middleware('auth');

Route::resource('galeriash', 'App\Http\Controllers\GaleriahController')->middleware('auth');




Route::get('/', 'App\Http\Controllers\InicioController@principal');

Route::get('mision', 'App\Http\Controllers\InicioController@mision');
Route::get('vision', 'App\Http\Controllers\InicioController@vision');
Route::get('proposito', 'App\Http\Controllers\InicioController@proposito');
Route::get('historiaporro', 'App\Http\Controllers\InicioController@historiaporro');
Route::get('historiaclub', 'App\Http\Controllers\InicioController@historiaclub');
Route::get('proyectofestival', 'App\Http\Controllers\InicioController@proyectofestival');
Route::get('gestionadministrativa', 'App\Http\Controllers\InicioController@gestionadministrativa');
//Route::get('actividadservicios', 'App\Http\Controllers\InicioController@actividadservicios');



