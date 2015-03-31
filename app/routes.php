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


/*
|--------------------------------------------------------------------------
| Sessions and Authentication
|--------------------------------------------------------------------------
|
*/
Route::get('/', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

/*
|--------------------------------------------------------------------------
| Home Pages
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
    Route::get('/select',['as' => 'home', 'uses' => 'UsersController@index']); // Select
});

/*
|--------------------------------------------------------------------------
| Matriculate Pages
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
    Route::get('/matriculate', 'MatriculateController@index'); // Opciones de Matricula
    Route::get('/matriculate/new', 'MatriculateController@create'); // Crear Matricula
    Route::post('/matriculate/review', 'MatriculateController@finish'); // Revisar la Matricula Creada
    Route::get('/matriculate/review', 'MatriculateController@review'); // Ver las Matriculas Listado
    Route::get('/matriculate/reset', 'MatriculateController@reset'); // Ver las Matriculas Listado
});
/*
|--------------------------------------------------------------------------
| Consultas Ajax
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
    Route::post('/ajax/step/{step}', 'AjaxController@MatriculateStep');
});
