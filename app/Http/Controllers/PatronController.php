<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class PatronController extends Controller
{

  public function index()
  {
    $patrons = Patron::all();
    dd($patrons);
    return view('patron.viewAll', ['patrons' => $patrons]);
  }

  public function checkedOut()
  {
    $patrons = Patron::get();

    return view('checkedOut.index', ['patrons' => $patron]);
  }
}
