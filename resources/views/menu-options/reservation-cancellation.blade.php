@extends('layouts.admin')

@section('content')
<div class="container-fluid margin-form">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Cancelaciones</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Habitación</th>
                  <th>Check-In</th>
                </tr>
              </thead>
              <tbody>
                @foreach($reservaciones as $reservacion)
                  <form action="{{route('hotel.updCheckin')}}" method="POST">
                    @csrf
                    <tr>
                      <th scope="row">{{$reservacion->id}}</th>
                      <td>{{$reservacion->getClientName($reservacion->client_id)}}</td>
                      <td>{{$reservacion->getClientLastname($reservacion->client_id)}}</td>
                      <td>{{$reservacion->tipo_hab}}</td>
                      <td>{{$reservacion->check_in}}</td>

                      <input type="hidden" value="{{$reservacion->id}}" name="reserv_id"></input>
                      <input type="hidden" value="{{$reservacion->getClientName($reservacion->client_id)}}" name="cliente_name"></input>
                      <input type="hidden" value="{{$reservacion->getClientLastname($reservacion->client_id)}}" name="cliente_lastname"></input>
                      <input type="hidden" value="{{$reservacion->tipo_hab}}" name="tipo_hab"></input>
                      <input type="hidden" value="{{$reservacion->check_in}}" name="reserv_checkin"></input>
                      
                      <td><input type="submit" value="Cancelar" class="btn btn-danger"></input></td>
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