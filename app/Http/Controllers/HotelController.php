<?php

namespace App\Http\Controllers;

use App\Room;
use App\Client;
use App\Invoice;
use App\Reservation;
use App\DoorOpening;
use App\ElectronicCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth')->except([
        'logout',
        'rooms',
        'restaurant',
        'about',
        'contact',
        'disponibilidad',
        'showClientForm',
        'store'
      ]);
  }

  public function rooms()
  {
    return view('layouts.rooms');
  }

  public function restaurant()
  {
    return view('layouts.restaurant');
  }

  public function about()
  {
    return view('layouts.about');
  }

  public function contact()
  {
    return view('layouts.contact');
  }

  public function adm()
  {
    return view('layouts.admin');
  }

  public function disponibilidad(Request $request)
  {
    //dd($request);
    $rooms = Room::getDisponibles($request->input('cuartos'));
    foreach($request->all() as $field)
    {
      if(empty($field))
      {
        return redirect()->route('inicio')->with('error_message','Datos incompletos, no es posible verificar disponibilidad');
      }
    }

    if($rooms == 0)
    {
      return redirect()->route('inicio')->with('error_message', "No hay habitaciones disponibles");
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
    $reservacion->tipo_hab = $request->tipo_cuarto;
    $reservacion->check_in = $request->check_in;
    $reservacion->check_out = $request->check_out;

    $reservacion->save();

    $room = Room::getFirstAvailable($request->tipo_cuarto);
    $room->disponible = 0;
    $room->save();

    return redirect()->route('inicio')->with('success_message', 'Tu reservación está lista');
  }

  public function checkinOption()
  {
    $reservaciones = Reservation::where('hora_llegada', NULL)->get();

    return view('menu-options.reservation-checkin', compact('reservaciones'));
  }

  public function updateCheckin(Request $request)
  {
    $room = Room::where('tipo', $request->tipo_hab)->where('disponible', 0)->where('en_uso', 0)->first();
    $room_id = $room->id;
    $room->en_uso = 1;
    //dd($room);
    $room->save();

    $reservation = Reservation::where('id', $request->reserv_id)->get()[0];
    $reservation->hora_llegada = $request->hora_llegada;
    $reservation->room_id = $room_id;
    //dd($reservation);
    $reservation->save();

    $ecard = ElectronicCard::where('estado', 0)->first();
    $ecard->client_id = $reservation->client_id;
    $ecard->room_id = $room_id;
    $ecard->estado = 1;
    //dd($ecard);
    $ecard->save();
    return redirect()->route('hotel.checkinOption');
  }

  public function checkoutOption()
  {
    //$currdate = date('Y-m-d');
    $reservaciones = Reservation::where('hora_llegada', '!=', NULL)->where('hora_salida', NULL)->get();

    return view('menu-options.reservation-checkout', compact('reservaciones'));
  }

  public function updateCheckout(Request $request)
  {
    $room = Room::where('numero', $request->numero_hab)->first();
    $room->disponible = 1;
    $room->en_uso = 0;
    //dd($room);
    $room->save();

    $reservation = Reservation::where('id', $request->reserv_id)->get()[0];
    $reservation->hora_salida = $request->hora_salida;
    //dd($reservation);
    $reservation->save();

    $ecard = ElectronicCard::where('client_id', $reservation->client_id)->first();
    $ecard->client_id = NULL;
    $ecard->room_id = NULL;
    $ecard->estado = 0;
    //dd($ecard);
    $ecard->save();
    return redirect()->route('hotel.checkoutOption');
  }

  public function guestsOption()
  {
    $reservaciones = Reservation::where('hora_llegada', '!=', NULL)->where('hora_salida', NULL)->get();

    return view('menu-options.reservation-guests', compact('reservaciones'));
  }

  public function cancelOption()
  {
    $reservaciones = Reservation::where('hora_llegada', NULL)->get();

    return view('menu-options.reservation-cancellation', compact('reservaciones'));
  }

  public function availableOption()
  {
    $rooms = Room::where('disponible', 1)->get();

    return view('menu-options.rooms-available', compact('rooms'));
  }

  public function busyOption()
  {
    $rooms = Room::where('disponible', 0)->where('en_uso', 1)->get();

    return view('menu-options.rooms-busy', compact('rooms'));
  }

  public function outOption()
  {
    $rooms = Room::where('disponible', 1)->where('en_uso', 0)->get();

    return view('menu-options.rooms-outofservice', compact('rooms'));
  }

  public function setAvailability(Request $request)
  {
    $room = Room::where('id', $request->room_id)->first();
    $room->habilitada = ($request->room_available == 1) ? 0 : 1;
    $room->save();

    return redirect()->route('hotel.outOption');
  }

  public function cleaningOption()
  {
    $rooms = Room::all();

    return view('menu-options.rooms-cleaning', compact('rooms'));
  }

  public function sendCleaning(Request $request)
  {
    $room = Room::where('id', $request->room_id)->first();
    $room->limpieza = ($request->room_cleaning == 1) ? 0 : 1;
    $room->save();

    return redirect()->route('hotel.cleaningOption');
  }

  public function invoiceOption()
  {
    $facturas = Invoice::all();

    return view('menu-options.invoices', compact('facturas'));
  }

  public function ecardOption()
  {
    $ecards = ElectronicCard::where('estado', 1)->get();

    return view('menu-options.ecards-assigned', compact('ecards'));
  }

  public function accessOption(Request $request)
  {
    $reservations = Reservation::where('hora_llegada', '!=', NULL)->where('hora_salida', NULL)->get()->all();
    
    $door_openings = array();
    $clients_id = array();

    if(empty($request->old('client_id')))
    {
      foreach($reservations as $reservation)
      {
        $clients_id[] = $reservation->client_id;
        $door_openings[] = DoorOpening::where('client_id', $reservation->client_id)->get()->all();
      }
    }
    else{
      foreach($reservations as $reservation)
      {
        $clients_id[] = $reservation->client_id;
      }
      $door_openings[] = DoorOpening::where('client_id', $request->old('client_id'))->get()->all();
    }

    return view('menu-options.ecards-door-openings', compact('door_openings', 'clients_id'));
  }

  public function filterById(Request $request)
  {
    //dd($request->input('client_id'));
    $request->flash();

    return redirect()->route('hotel.accessOption');
  }
}
