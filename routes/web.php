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

Route::get('/', function () {
//    return view('welcome');
//return csrf_token();//yp7FPALn3AZIplgSBq3qwQRxgYocTd1c7vk4FAye

});

Route::post('/corazon/store', 'CorazonController@store');//primer punto
Route::get('/cliente/index', 'ClienteController@index');//segundo punto
Route::post('/cliente/store', 'ClienteController@store');//segundo punto
Route::post('/cliente/guardar', 'ClienteController@guardar');//segundo punto
Route::post('/estudiante/g_attach', 'EstudianteController@storeAttach');//tercer punto
Route::post('/estudiante/g_sync', 'EstudianteController@storeSync');//tercer punto
Route::get('/banco/index', 'BancoController@index');

Route::post('/comentario/store_create', 'ComentarioController@storeCreate');//segundo punto
Route::post('/comentario/store_createmany', 'ComentarioController@storeCreateMany');//segundo punto
Route::get('/comentario/index', 'ComentarioController@index');//tercer punto
Route::get('/comentario/get_blog', 'ComentarioController@getBlogs');//tercer punto
