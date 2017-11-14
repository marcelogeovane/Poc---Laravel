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
    return view('index');
});

Route::get('/rodarte', 'PostController@rodarte');

Route::get('/antoniovieira', 'PostController@antonio');

Route::get('/emart',  'PostController@emart');

Route::get('/engenheiro',  'PostController@engenheiro');

Route::get('/estacao', 'PostController@estacao');

Route::get('/matadouro',  'PostController@matadouro');

Route::get('/vicentinos',  'PostController@vicentinos');

Route::get('/matriz', 'PostController@matriz');

//Route::get('/posts/{post}', 'PostController@show');

Route::get('/index1', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::post('/posts', 'PostController@store');
