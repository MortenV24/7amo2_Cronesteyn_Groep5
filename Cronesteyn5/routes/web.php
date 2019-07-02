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
Route::get('/activiteiten', 'pagecontroller@activiteiten');
Route::get('/vogelwerkgroep', 'pagecontroller@vogelwerkgroep');
Route::get('/gallery', 'pagecontroller@gallery');

Route::resource('Content','Contentcontroller');
Route::post('contact','pagecontroller@store');
Route::resource('contact','pagecontroller');
Route::get('/contact', 'pagecontroller@contact');
Auth::routes();



Route::get('/dashboard', 'DashboardController@index')   ;
Route::get('/admin/contentAanmaken', 'DashboardController@contentAanmaken');
Route::get('/admin/contentVeranderen', 'DashboardController@contentVeranderen');
Route::get('/admin/Content', 'DashboardController@Content');
Route::get('/admin/contactBerichten', 'DashboardController@contact');