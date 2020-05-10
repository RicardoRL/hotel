<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hotel Tapachula</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="./css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.png">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center  margin-form">
        <div class="col-sm-2">
          <div class="card">
            <div class="card-header d-flex align-items-center card-header-color">
              <h5 style="text-align: center">Disponibles</h5>
            </div>
            <div class="card-body">
              <p style="text-align: center">{{Session::get('rooms')}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center margin-form">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header d-flex align-items-center card-header-color">
              <h4>Registro</h4>
            </div>
            <div class="card-body">
              <p>Por favor, llene el formulario para completar su registro</p>
              <form class="form-horizontal" action="{{route('hotel.store')}}" method="POST">
                @csrf
                <div class="form-group row">
                  <div class="col-sm-3"> 
                    <label>Nombre</label>
                  </div>
                  <div class="col-sm-8">
                    <input id="inputHorizontalSuccess" type="text" placeholder="Nombre" class="form-control form-control-success" name="nombre" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"> 
                    <label>Apellido</label>
                  </div>
                  <div class="col-sm-8">
                    <input id="inputHorizontalWarning" type="text" placeholder="Apellido" class="form-control form-control-warning" name="apellido" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"> 
                    <label>Ciudad</label>
                  </div>
                  <div class="col-sm-8">
                    <input id="inputHorizontalWarning" type="text" placeholder="Ciudad" class="form-control form-control-warning" name="ciudad">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"> 
                    <label>Check-in</label>
                  </div>
                  <div class="col-sm-6">
                    <p>{{$check_in}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"> 
                    <label>Check-out</label>
                  </div>
                  <div class="col-sm-6">
                    <p>{{$check_out}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"> 
                    <label>Habitación</label>
                  </div>
                  <div class="col-sm-4">
                    <p>{{$cuarto}}</p>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"> 
                    <label>Personas</label>
                  </div>
                  <div class="col-sm-4">
                    {{$personas}}
                  </div>
                </div>
                <input type="hidden" class="form-control checkin_date" placeholder="Check-in date" value="{{$check_in}}" name="check_in">
                <input type="hidden" class="form-control checkout_date" placeholder="Check-out date" value="{{$check_out}}" name="check_out">
                <input id="inputHorizontalWarning" type="hidden" class="form-control form-control-warning" value="{{$cuarto}}" name="tipo_cuarto">
                <input id="inputHorizontalWarning" type="hidden" class="form-control form-control-warning" value="{{$personas}}" name="personas">
                <div class="form-group row text-center">       
                  <div class="col-sm-10 offset-sm-2">
                    <input type="submit" value="Registrar" class="btn btn-primary card-header-color">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>