<?php

namespace App\Http\Controllers;

use App\Book;
use App\Patron;
use Illuminate\Http\Request;

class PatronController extends Controller
{

  public function index()
  {
    $patrons = Patron::all();
    // dd($patrons);
    return view('patron.viewAll', ['patrons' => $patrons]);
  }

  public function showBook()
  {
    $patrons = Patron::get();
    // dd($patrons);
    return view('patron.viewAll', ['patrons' => $patrons]);
  }

  public function viewAll()
  {
      $patrons = Patron::get();
      return view('patron.viewAll', ['patrons' => $patrons]);
  }

  public function checkedOut()
  {
    $patrons = Patron::get();

    return view('patron.checkedOut', ['patrons' => $patrons]);
  }
}
