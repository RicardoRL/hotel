<?php

namespace App\Http\Controllers;

use App\Room;
use App\Client;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function disponibilidad(Request $request)
    {
      $rooms = Room::getDisponibles($request->input('cuartos'));
      foreach($request->all() as $field)
      {
        if(empty($field))
        {
          return redirect()->back()->with('error_message','Datos incompletos, no es posible verificar disponibilidad');
        }
      }

      if($rooms == 0)
      {
        return redirect()->back()->with('error_message', "No hay habitaciones disponibles");
      }

      $request->flash();

      return redirect()->route('hotel.form')->with('rooms', $rooms);
    }

    public function showClientForm(Request $request)
    {
      $date_in = date_create($request->old('check_in'));
      $date_in = $date_in->format('Y-m-d');

      $date_out = date_create($request->old('check_out'));
      $date_out = $date_out->format('Y-m-d');

      $check_in = $date_in;
      $check_out = $date_out;
      $cuarto = $request->old('cuartos');
      $personas = $request->old('personas');

      return view('layouts.form', compact('check_in', 'check_out', 'cuarto', 'personas'));
    }

    public function store(Request $request)
    {
      //dd($request);
      $request->validate([
        'nombre' => 'required|string|max:50',
        'apellido' => 'required|string|max:50',
        'ciudad' => 'string|max:50',
        'check_in' => 'required|date',
        'check_out' => 'required|date',
        'tipo_cuarto' => 'required|string',
        'personas' => 'required|numeric'
      ]);

      $cliente = new Client();
      $reservacion = new Reservation();

      $cliente->nombre = $request->nombre;
      $cliente->apellido = $request->apellido;
      $cliente->ciudad = $request->ciudad;

      $cliente->save();

      $ultimo_cliente= DB::table('clients')->latest()->first();
      if(empty($ultimo_cliente))
      {
        $cliente_id = 1;
      }
      else{
        $cliente_id = $ultimo_cliente->id;
      }

      $reservacion->client_id = $cliente_id;
      $reservacion->check_in = $request->check_in;
      $reservacion->check_out = $request->check_out;

      $reservacion->save();

      $room = Room::getFirstAvailable($request->tipo_cuarto);
      $room->disponible = 0;
      $room->save();

      return redirect()->route('inicio')->with('success_message', 'Tu reservación está lista');
    }
}
