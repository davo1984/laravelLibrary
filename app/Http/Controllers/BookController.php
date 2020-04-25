<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

  public function index()
  {
    $books = Book::all();
    // dd($patrons);
    return view('book.viewAll', ['books' => $books]);
  }

  public function show()
  {
    $books = Book::get();
    // dd($books);
    return view('book.viewBook', ['books' => $books]);
  }

  public function checkedOut()
  {
    $books = Book::get();

    return view('book.checkedOut', ['books' => $books]);
  }//
}
