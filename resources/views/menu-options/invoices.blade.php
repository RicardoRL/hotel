@extends('layouts.admin')

@section('content')
<div class="container-fluid margin-form">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <h4>Facturas</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Cliente id</th>
                  <th>Nombre del cliente</th>
                  <th>Concepto</th>
                  <th>Cantidad</th>
                  <th>Fecha</th>
                </tr>
              </thead>
              <tbody>
                @foreach($facturas as $factura)
                  <tr>
                    <th scope="row">{{$factura->id}}</th>
                    <td>{{$factura->client_id}}</td>
                    <td>{{$factura->nombre_completo}}</td>
                    <td>{{$factura->concepto}}</td>
                    <td>{{$factura->cantidad}}</td>
                    <td>{{$factura->updated_at}}</td>
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