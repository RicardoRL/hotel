<?php

namespace App;

use App\Client;
use App\Room;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
  public function client()
  {
    return $this->belongsTo('App\Client');
  }

  public function room()
  {
    return $this->belongsTo('App\Room');
  }

  public function getClientName($client_id)
  {
    $cliente = Client::where('id', $client_id)->get();
    $nombre = "";
    if(!empty($cliente))
    {
      $cliente = $cliente->all()[0];
      $nombre = $cliente->nombre;
    }

    return $nombre;
  }

  public function getClientLastname($client_id)
  {
    $cliente = Client::where('id', $client_id)->get();
    $apellido = "";
    if(!empty($cliente))
    {
      $cliente = $cliente->all()[0];
      $apellido = $cliente->apellido;
    }
    
    return $apellido;
  }

  public function getRoomNumber($room_id)
  {
    $room_number = Room::where('id', $room_id)->first()->numero;

    return $room_number;
  }
}
