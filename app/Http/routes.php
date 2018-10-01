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

Route::get('/', 'MeuController@index');

//Route::get('usuarios', 'MeuController@usuarios');
Route::get('usuarios', 'MeuController@usuarios');

Route::get('sobre', 'MeuController@sobre');

Route::get('contato', 'MeuController@contato');

Route::get('create', 'MeuController@criar');

Route::post('usuarios/store', 'MeuController@store');

Route::get('usuarios/excluir/{id}', 'MeuController@destroy');

Route::get('usuarios/editar/{id}', 'MeuController@edit');

Route::put('usuarios/atualizar/{id}', 'MeuController@update');

Route::get('contato/user/{id}', 'MeuController@user');

Route::get('download/{id}', 'MeuController@download');

Route::get('search', 'MeuController@search');

Route::post('contato/store', 'ContadoController@sendEmail');

// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@logout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Rotas para solicitar trocar de senha...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Rotas para trocar a senha...
Route::get('password/reset/{token}', 'PasswordController@getReset');
Route::post('password/reset', 'PasswordController@postReset');


//Route::get('login/{id}', function ($id){
//    $user = App\User::find($id);
//    Auth::login($user);
//    if(Auth::check()){
//        return "Usuario (a) " . $user->name.' Logado';
//    }
//});
//Route::get('logout/{id}', function ($id){
//    $user = App\User::find($id);
//    Auth::logout($user);
//});
//
//Route::get('secreto',['middleware'=>'auth', function (){
//    return 'Conteudo visivel apenas para usuarios autenticados !';
//}]);
