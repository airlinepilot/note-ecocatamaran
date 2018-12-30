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
Auth::routes();

Route::get('/home', 'NoteController@index')->name('home');
Route::get('/', 'NoteController@index')->name('root');

Route::resource('notes', 'NoteController');
Route::resource('problems', 'ProblemController');

Route::delete('notes/{note}/{file}', 'NoteController@filedestroy')->name('files.destroy');
