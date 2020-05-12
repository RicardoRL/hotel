@extends('layouts.admin')

@section('content')
<div class="container-fluid margin-form">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Tarjetas electrónicas en uso</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th># Habitación</th>
                </tr>
              </thead>
              <tbody>
                @foreach($ecards as $ecard)
                  <tr>
                    <th scope="row">{{$ecard->id}}</th>
                    <td>{{$ecard->getClientName($ecard->client_id)}}</td>
                    <td>{{$ecard->getClientLastname($ecard->client_id)}}</td>
                    <td>{{$ecard->getRoomNumber($ecard->room_id)}}</td>
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