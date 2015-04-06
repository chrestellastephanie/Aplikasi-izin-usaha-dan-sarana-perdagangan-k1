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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('permohonan','PermohonanController@chooseIzin');
Route::get('permohonan/ajukan-IUTM-IUPP-IUPPT','PermohonanController@show_IUTM_IUPP_IUPPT');
Route::get('permohonan/ajukan-STPW','PermohonanController@show_STPW');
Route::get('permohonan/ajukan-ITPMB','PermohonanController@show_ITPMB');


Route::post('permohonan/IUTMSuccess','PermohonanController@ajukan_IUTM_IUPP_IUPPT');
Route::post('permohonan/STPWSuccess','PermohonanController@ajukan_STPW');
Route::post('permohonan/ITPMBSuccess','PermohonanController@ajukan_ITPMB');

