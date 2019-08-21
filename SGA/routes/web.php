<?php

Route::get('/', 'HomeController@index')->name('login');
Route::post('/login', 'HomeController@login');

Route::group(['middleware' => ['auth']], function(){

	Route::get('/logout', function(){
		Auth::logout();
		return redirect()->route('login');
	});
Route::get('/painel', 'HomeController@painel')->name('painel');
	Route::get('/painel/estudante', 'PainelController@estudante');
	Route::get('/painel/usuarios', 'PainelController@usuarios');
	Route::get('/painel/estudante/create', 'PainelController@createStudant');
	Route::get('/painel/usuarios/create', 'PainelController@createUser');
	Route::post('/painel/insert', 'AlunoController@insert');
	Route::post('/painel/insert/user', 'UserController@insertUser');
	Route::get('/painel/estudante/edit/{id}', 'AlunoController@edit');
	Route::put('/painel/estudante/update/{id}', 'AlunoController@update');
	Route::get('/painel/estudante/delete/{id}', 'AlunoController@delete');
	Route::get('/painel/usuario/edit/{id}', 'UserController@edit');
	Route::get('/painel/usuario/delete/{id}', 'UserController@delete');
	Route::put('/painel/usuario/update/{id}', 'UserController@update');

	
});
