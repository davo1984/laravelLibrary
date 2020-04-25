<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patron extends Model
{
  public function checkouts()
  {
    return $this->hasMany('App\Checkout');
  }
}
