<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

  public function reservation()
  {
    return $this->hasOne('App\Reservation');
  }

  public static function getDisponibles($room_type)
  {
    return self::where(function($query) use ($room_type){
      $query->where('tipo', $room_type);
      $query->where('disponible', 1);
      $query->where('habilitada', 1);
    })->count();
  }

  public static function getFirstAvailable($room_type)
  {
    return self::where(function($query) use ($room_type){
      $query->where('tipo', $room_type);
      $query->where('disponible', 1);
      $query->where('habilitada', 1);
    })->first();
  }

  public static function getAvailableSencillas()
  {
    return self::where('tipo', 'sencilla')->where('disponible', 1)->where('habilitada', 1)->count();
  }

  public static function getAvailableDobles()
  {
    return self::where('tipo', 'doble')->where('disponible', 1)->where('habilitada', 1)->count();
  }

  public static function getAvailableSuites()
  {
    return self::where('tipo', 'suite')->where('disponible', 1)->where('habilitada', 1)->count();
  }

  public static function getBusySencillas()
  {
    return self::where('tipo', 'sencilla')->where('disponible', 0)->where('en_uso', 1)->count();
  }

  public static function getBusyDobles()
  {
    return self::where('tipo', 'doble')->where('disponible', 0)->where('en_uso', 1)->count();
  }

  public static function getBusySuites()
  {
    return self::where('tipo', 'suite')->where('disponible', 0)->where('en_uso', 1)->count();
  }

  public static function getOutSencillas()
  {
    return self::where('tipo', 'sencilla')->where('habilitada', 0)->count();
  }

  public static function getOutDobles()
  {
    return self::where('tipo', 'doble')->where('habilitada', 0)->count();
  }

  public static function getOutSuites()
  {
    return self::where('tipo', 'suite')->where('habilitada', 0)->count();
  }

  public static function getCleaningSencillas()
  {
    return self::where('tipo', 'sencilla')->where('limpieza', 0)->count();
  }

  public static function getCleaningDobles()
  {
    return self::where('tipo', 'doble')->where('limpieza', 0)->count();
  }

  public static function getCleaningSuites()
  {
    return self::where('tipo', 'suite')->where('limpieza', 0)->count();
  }
}
