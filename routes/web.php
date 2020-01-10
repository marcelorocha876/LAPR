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
    return view('welcome');
});



Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/about', 'PagesController@aboutpage');
Route::get('/colabs', 'PagesController@colabs');
Route::get('/perfilform', 'PagesController@personal_information_form');
Route::get('/perfilpessoal', 'PagesController@perfil_pessoal');
Route::get('/candidatura', 'PagesController@candidatura');
Route::get('/comp_ausencia', 'PagesController@comprovativo_ausencia');
Route::get('/comp_iban', 'PagesController@comprovativo_iban');
Route::get('/comp_morada', 'PagesController@comprovativo_morada');
Route::get('/comp_identificacao', 'PagesController@comprovativo_identificacao');
Route::get('/correio/entrada', 'CorreioController@entrada');
Route::get('/correio/enviado', 'CorreioController@enviado');
Route::get('/correio/compor', 'CorreioController@compor');
Route::get('/objetivospessoais', 'PagesController@objetivospessoais');
Route::get('/fazerpedido', 'PagesController@fazerpedido');
Route::get('/historicopedidos', 'PagesController@historicopedidos');


//fullcalendar

Route::get('/calendario', 'FullCalendarController@index');
Route::post('/fullcalendar/create', 'FullCalendarController@create');
Route::post('/fullcalendar/update', 'FullCalendarController@update');
Route::post('/fullcalendar/delete', 'FullCalendarController@destroy');


Route::resource('/HomeController', 'HomeController');
Route::get('/insertObjetivoImpresarial', 'HomeController@index')->name('addObjectivoGet');
Route::post('/insertObjetivoImpresarial', 'HomeController@addObjetivosImpresariais')->name('addObjetivo');
Route::get('insertObjetivoImpresarial', 'HomeController@getallcompanygoals')->name('getallcompanygoals');
