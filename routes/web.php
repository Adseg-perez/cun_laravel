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

return csrf_token();

});


Route::post('/comentario/store_create', 'ComentarioController@storeCreate');//segundo punto
Route::post('/comentario/store_createmany', 'ComentarioController@storeCreateMany');//segundo punto
Route::get('/comentario/index', 'ComentarioController@index');//tercer punto
Route::get('/comentario/get_blog', 'ComentarioController@getBlogs');//tercer punto
