<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
  public function patron()
  {
    return $this->belongsTo('App\Patron');
  }
}
