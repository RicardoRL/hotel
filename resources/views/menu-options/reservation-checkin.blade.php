@extends('layouts.admin')

@section('content')
<div class="container-fluid margin-form">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Entradas</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Check-In</th>
                  <th>Hora de llegada</th>
                </tr>
              </thead>
              <tbody>
                @foreach($reservaciones as $reservacion)
                <tr>
                  <th scope="row">{{$reservacion->id}}</th>
                  <td>{{$reservacion->getClientName($reservacion->client_id)}}</td>
                  <td>{{$reservacion->getClientLastname($reservacion->client_id)}}</td>
                  <td>{{$reservacion->check_in}}</td>
                  <td>
                    <input type="time" name="hora_llegada">
                  </td>
                  <td><button type="button" class="btn btn-success">Check-in</button></td>
                </tr>
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