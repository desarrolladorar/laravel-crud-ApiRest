<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AlumnoController@index');
Route::get('alumno/index', 'AlumnoController@index');

Route::get('alumno/editar/{id}', 'AlumnoController@show')->name('alumno_editar');
Route::post('alumno/editar/{id}', 'AlumnoController@update');

Route::get('nota/index/{id}', 'NotaController@index')->name('alumno_nota');

Route::get('alumno/eliminar/{id}', 'AlumnoController@destroy')->name('alumno_eliminar');

Route::get('nota/editar/{id}', 'NotaController@show')->name('nota_editar');
Route::post('nota/editar/{id}', 'NotaController@update');

Route::get('nota/eliminar/{id}', 'NotaController@destroy')->name('nota_eliminar');


	
		Route::post('/alumno/nuevo', 'AlumnoController@store')->name('nuevo_alumno');
		
		Route::get('/alumno/nuevo', function () {
		    return view('/alumno/nuevo');
		});

		Route::post('/nota/nuevo', 'NotaController@store')->name('nota_alumno');
		Route::get('/nota/nuevo', 'NotaController@listar');
		

		

	








