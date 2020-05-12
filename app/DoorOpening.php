<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoorOpening extends Model
{
  public function client()
  {
    return $this->belongsTo('App\Client');
  }

  public function electronic_card()
  {
    return $this->belongsTo('App\ElectronicCard');
  }
}
