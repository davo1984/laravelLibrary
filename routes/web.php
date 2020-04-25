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

Route::view('/', 'welcome');  // welcome == view name == welcome.blade.php
Route::get('/patron/viewAll', 'PatronController@index');         // list all books
Route::get('/patron/checkedOut', 'PatronController@checkedOut'); // list all books checked out

Route::get('/book/viewAll', 'BookController@index');         // list all books
Route::get('/book/{book}', 'BookController@show');         // show a book
Route::get('/book/checkedOut', 'BookController@checkedOut'); // list all books checked out

Route::get('', 'PatronController@viewAll'); // list all patrons
// Route::view('/librarian', 'librarian'); // librarian.blade.php buttons to do stuff
// Route::get('/librarian/reports', 'LibrarianController@index');  // list all books tab list

// Route::post('/library', 'LibrarianController@store');
// Route::get('/librarian/patron/create', 'PatronsController@create');
// Route::get('/librarian/book/{id}', 'LibrarianController@edit');
// Route::put('/patron/{book}', 'PatronsController@update');