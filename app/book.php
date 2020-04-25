<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
  public function checkouts()
  {
    return $this->hasMany('App\Checkout');
  }
}
