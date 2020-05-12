@extends('layouts.admin')

@section('content')
<div class="container-fluid margin-form">
  <div class="row">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Control de habitaciones</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Número</th>
                  <th>Tipo</th>
                </tr>
              </thead>
              <tbody>
                @foreach($rooms as $room)
                  <form action="{{route('hotel.setAvailability')}}" method="POST">
                    @csrf
                    <tr>
                      <th scope="row">{{$room->id}}</th>
                      <td>{{$room->numero}}</td>
                      <td>{{$room->tipo}}</td>
                      
                      <input type="hidden" value="{{$room->id}}" name="room_id"></input>
                      <input type="hidden" value="{{$room->numero}}" name="room_number"></input>
                      <input type="hidden" value="{{$room->tipo}}" name="room_type"></input>
                      <input type="hidden" value="{{$room->habilitada}}" name="room_available"></input>
                      @if($room->habilitada == 0)
                        <td><input type="submit" value="Habilitar" class="btn btn-success"></input></td>
                      @else
                        <td><input type="submit" value="Deshabilitar" class="btn btn-danger"></input></td>
                      @endif
                    </tr>
                  </form>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="card">
        <div class="card-header">
          <h4>Habitaciones fuera de servicio por tipo</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Tipo</th>
                  <th>Cantidad</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sencilla</td>
                  <td>{{App\Room::getOutSencillas()}}</td>
                </tr>
                <tr>
                  <td>Doble</td>
                  <td>{{App\Room::getOutDobles()}}</td>
                </tr>
                <tr>
                  <td>Suites</td>
                  <td>{{App\Room::getOutSuites()}}</td>
                </tr>
                <tr>
                  <td>Total</td>
                  <td>{{App\Room::getOutSuites() + App\Room::getOutDobles() + App\Room::getOutSencillas()}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection