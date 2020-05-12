@extends('layouts.admin')

@section('content')
<div class="container-fluid margin-form">
  <div class="row">
    <div class="col-sm-2">
      <div class="card">
        <div class="card-header">
          <h4>Cliente Id</h4>
        </div>
        <div class="card-body">
          <form action="{{route('hotel.filterById')}}" method="POST">
            @csrf
            <select name="client_id" class="form-control">
              @foreach($clients_id as $client_id)
                <option>{{$client_id}}</option>
              @endforeach
            </select>
            <input type="submit" value="Filtrar" class="btn btn-info" style="margin-top:10px;"></input>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Control de accesos</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Tarjeta Electrónica Id</th>
                  <th>Cliente Id</th>
                  <th>Lugar</th>
                  <th>Fecha de apertura</th>
                </tr>
              </thead>
              <tbody>
                @foreach($door_openings as $door_opening)
                  @for($i=0; $i<count($door_opening); $i++)
                    <tr>
                      <th scope="row">{{$door_opening[$i]->id}}</th>
                      <td>{{$door_opening[$i]->electronic_card_id}}</td>
                      <td>{{$door_opening[$i]->client_id}}</td>
                      <td>{{$door_opening[$i]->lugar}}</td>
                      <td>{{$door_opening[$i]->fecha_apertura}}</td>
                    </tr>
                  @endfor
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