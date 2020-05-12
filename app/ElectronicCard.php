<?php

namespace App;

use App\Client;
use App\Room;
use Illuminate\Database\Eloquent\Model;

class ElectronicCard extends Model
{
  public function getClientName($cliente_id)
  {
    return Client::where('id', $cliente_id)->first()->nombre;
  }

  public function getClientLastname($cliente_id)
  {
    return Client::where('id', $cliente_id)->first()->apellido;
  }

  public function getRoomNumber($room_id)
  {
    return Room::where('id', $room_id)->first()->numero;
  }
}
