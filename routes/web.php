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

Route::get('/rodarte', function () {
	return view('rodarte');
});

Route::get('/antoniovieira', function () {
    return view('antoniovieira');
});

Route::get('/emart', function () {
    return view('emart');
});

Route::get('/engenheiro', function () {
    return view('engenheiro');
});

Route::get('/estacao', function () {
    return view('estacao');
});

Route::get('/matadouro', function () {
    return view('matadouro');
});

Route::get('/rodarte', function () {
    return view('rodarte');
});

Route::get('/vicentinos', function () {
    return view('vicentinos');
});

Route::get('/matriz', function () {
    return view('matriz');
});
