<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvtitleer within a group which
| contains the "web" mtitledleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('insert','articlesController@insertform');
Route::post('create','articlesController@insert');
Route::get('edit-records','articlesController@index');
Route::get('articles','articlesController@records');
Route::get('/home', function () {
    return view('home');
});
Route::get('edit/{title}','articlesController@show');
Route::post('edit/{title}','articlesController@edit');
Route::get('delete-records','articlesController@index');
Route::get('delete/{title}','articlesController@destroy');
