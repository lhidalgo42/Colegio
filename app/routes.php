<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'PagesController@index'); // index
Route::get('/select', 'PagesController@select'); // Select
Route::get('/matriculas/options', 'MatriculasController@options'); // Opciones de Matricula
Route::get('/admin/index', 'AdminController@index'); // inicio admin