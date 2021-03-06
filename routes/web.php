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
    return view('Dashboard_and_projects.dashboard_and_projects');
});

//cv route
Route::get('/cv', 'CvController@index');

//psd route
Route::get('/psd', 'PsdController@index');

//CNC project routes
Route::get('/cnc/program1', 'CncProjectsController@CncPr1index');
Route::get('/cnc/program2', 'CncProjectsController@CncPr2index');

//PHP project routes
Route::get('/php/portfolio', 'PhpProjectsController@portfolioIndex');
Route::get('/php/forum', 'PhpProjectsController@forumIndex');
Route::get('/php/webshop', 'PhpProjectsController@webshopIndex');

//Java projects
Route::get('/java/todolist', 'JavaProjectsController@index');

