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
| Routes for Login
|--------------------------------------------------------------------------
|
*/
Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

/*
|--------------------------------------------------------------------------
| Home Pages
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
    Route::get('/',['as' => 'home', 'uses' => 'UsersController@index']);
    Route::get('/tuition/new',['as' => 'tuition','uses' => 'TuitionsController@create']);
    Route::post('/tuition/new',['uses' => 'TuitionsController@store']);
    Route::get('/config',['as' => 'config','uses' => 'ConfigController@index']);
    Route::get('/families',['as' => 'families','uses' => 'FamilyController@index']);
});



/*
|--------------------------------------------------------------------------
| Ajax Routes
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
Route::post('/grade/price','GradesController@find');

});

