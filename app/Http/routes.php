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

Route::get('admin', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
// user
Route::get('/','PermohonanController@chooseIzin');
Route::get('permohonan/ajukan-IUTM-IUPP-IUPPT','PermohonanController@show_IUTM_IUPP_IUPPT');
Route::get('permohonan/ajukan-STPW','PermohonanController@show_STPW');
Route::get('permohonan/ajukan-ITPMB','PermohonanController@show_ITPMB');

Route::post('permohonan/IUTMSuccess','PermohonanController@ajukan_IUTM_IUPP_IUPPT');
Route::post('permohonan/STPWSuccess','PermohonanController@ajukan_STPW');
Route::post('permohonan/ITPMBSuccess','PermohonanController@ajukan_ITPMB');

Route::get('user-profile','UserProfileController@index');


// dinas
// Route::get('admin','SiteController@indexAdminView');
Route::get('admin/permohonan/view','PermohonanController@index');
// Route::get('admin/permohonan/berkasIUTM','PermohonanController@berkasIUTMView');
Route::get('admin/permohonan/berkasIUTM/{id}','SiteController@showBerkasIUTM');
Route::get('admin/permohonan/berkasSTPW/{id}','SiteController@showBerkasSTPW');
Route::get('admin/permohonan/berkasITPMB/{id}','SiteController@showBerkasITPMB');

Route::post('admin/setujuIUTM','PermohonanController@setujuIUTM'); //ubah status aja
Route::post('admin/setujuIUTM','PermohonanController@setujuIUTM'); //bikin pdf
Route::post('admin/setujuSTPW','PermohonanController@setujuSTPW');
Route::post('admin/setujuITPMB','PermohonanController@setujuITPMB');

Route::post('admin/tolakIUTM','PermohonanController@tolakIUTM');
Route::post('admin/tolakSTPW','PermohonanController@tolakSTPW');
Route::post('admin/tolakITPMB','PermohonanController@tolakITPMB');

Route::get('admin/izin','PermohonanController@showAccepted');
Route::get('admin/izin/{id}','SiteController@showIzinIUTM');