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

Route::get('/', 'pagecontroller@index');
Route::get('/parkvereniging', 'pagecontroller@Parkvereniging');
Route::get('/admin/contentAanmaken', 'pagecontroller@contentAanmaken');
Route::get('/activiteiten', 'pagecontroller@activiteiten');
Route::get('/vogelwerkgroep', 'pagecontroller@vogelwerkgroep');


Route::post('/ContentParkvereniging', 'Contentcontroller@storeParkvereniging');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')   ;
