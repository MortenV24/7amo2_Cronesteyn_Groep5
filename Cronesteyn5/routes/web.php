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

Route::get('/index', 'pagecontroller@index');
Route::get('/parkvereniging', 'pagecontroller@Parkvereniging');
Route::get('/admin/contentAanmaken', 'pagecontroller@contentAanmaken');
Route::post('/ContentParkvereniging', 'Contentcontroller@storeParkvereniging');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')   ;
