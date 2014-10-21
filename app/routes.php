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
Route::get('/', 'SessionController@create'); // index
Route::post('/login', 'SessionController@store');

/*
|--------------------------------------------------------------------------
| Home Pages
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
    Route::get('/select', 'UserController@options'); // Select
    Route::get('/matriculate', 'MatriculateController@index'); // Opciones de Matricula
    Route::get('/matriculate/index', 'MatriculateController@create'); // Opciones de Matricula
    Route::get('/admin/index', 'AdminController@index'); // inicio admin
});

Route::get("getData", function()
{

    $posts = DB::table("banks")->get();
    return Response::json(array(
        "posts"        =>        $posts
    ));

});