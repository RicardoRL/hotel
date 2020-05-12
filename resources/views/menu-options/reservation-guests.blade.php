@extends('layouts.admin')

@section('content')
<div class="container-fluid margin-form">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Huéspedes</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th># Habitacion</th>
                  <th>Check-In</th>
                  <th>Check-Out</th>
                </tr>
              </thead>
              <tbody>
                @foreach($reservaciones as $reservacion)
                  <form action="#" method="#">
                    @csrf
                    <tr>
                      <th scope="row">{{$reservacion->id}}</th>
                      <td>{{$reservacion->getClientName($reservacion->client_id)}}</td>
                      <td>{{$reservacion->getClientLastname($reservacion->client_id)}}</td>
                      <td>{{$reservacion->getRoomNumber($reservacion->room_id)}}</td>
                      <td>{{$reservacion->check_in}}</td>
                      <td>{{$reservacion->check_out}}</td>
                      
                      <input type="hidden" value="{{$reservacion->id}}" name="reserv_id"></input>
                      <input type="hidden" value="{{$reservacion->getClientName($reservacion->client_id)}}" name="cliente_name"></input>
                      <input type="hidden" value="{{$reservacion->getClientLastname($reservacion->client_id)}}" name="cliente_lastname"></input>
                      <input type="hidden" value="{{$reservacion->getRoomNumber($reservacion->room_id)}}" name="numero_hab"></input>
                      <input type="hidden" value="{{$reservacion->check_in}}" name="reserv_checkin"></input>
                      <input type="hidden" value="{{$reservacion->check_out}}" name="reserv_checkout"></input>
                      <td><input type="submit" value="Actualizar check-out" class="btn btn-info"></input></td>
                    </tr>
                  </form>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection