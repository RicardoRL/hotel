<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public static function getDisponibles($room_type)
    {
      return self::where(function($query) use ($room_type){
        $query->where('tipo', $room_type);
        $query->where('disponible', 1);
      })->count();
    }

    public static function getFirstAvailable($room_type)
    {
      return self::where(function($query) use ($room_type){
        $query->where('tipo', $room_type);
        $query->where('disponible', 1);
      })->first();
    }
}
