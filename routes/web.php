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

//Route::get('/', function () {
  //  return view('welcome');
//});


Route::get('/', 'AspirasiController@index');

Route::get('/create/laporkan', 'AspirasiController@create');

Route::get('/success', 'AspirasiController@show ');
Route::post('/success', 'AspirasiController@store');
Route::get('/success', 'AspirasiController@store');



//route aboutcontroller
Route::get('/about', 'AboutController@index');

 