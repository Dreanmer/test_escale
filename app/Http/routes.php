<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['middleware' => 'log', function () {
	$session = Session::all();
    return view('welcome', compact('session'));
}]);

Route::post('/', 'logsController@store');

Route::get('/logs', ['middleware' => 'auth', 'uses' => 'logsController@index']);
Route::get('/logs/{order?}/{direction?}', ['middleware' => 'auth', 'uses' => 'logsController@index']);

Route::get('/getAddress/{cep}', 'addressController@getAddress');

Route::get('/clearSession', function(){
	Session::flush();
	return redirect('/');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');