<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Library@show');

Route::get('/library', 'Libraryontroller@index');
Route::post('/library', 'LibraryController@store');
Route::get('/library/patron/create', 'ArticlesController@create');
Route::get('/library/librarian/edit', 'ArticlesController@edit');
Route::get('/patron/{book}', 'ArticlesController@show');
Route::put('/patron/{book}', 'ArticlesController@update');