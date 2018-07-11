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
    return view('main');
});

//cv route
Route::get('/cv', 'CvController@index');

//CNC project routes
Route::get('/cnc/program1', 'CncController@index');
Route::get('/cnc/program2', 'CncController@index1');


Route::get('/test', 'DBtestController@store');
Route::get('/name', 'DBtestController@index');