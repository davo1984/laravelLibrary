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

Route::get('/', 'LibraryController@????');  // ??what goes here

Route::get('/librarian/reports', 'LibraryController@index');
// Route::post('/library', 'LibrarianController@store');
// Route::get('/librarian/patron/create', 'PatronsController@create');
// Route::get('/librarian/book/{id}', 'LibrarianController@edit');
Route::get('/patron/checkedOutList', 'PatronsController@index');
// Route::put('/patron/{book}', 'PatronsController@update');