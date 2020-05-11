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
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="/admin/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="/admin/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/admin/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.ico">
    <!-- JavaScript files-->
    <script src="/admin/vendor/jquery/jquery.min.js"></script>
    <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="/admin/vendor/chart.js/Chart.min.js"></script>
    <script src="/admin/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="/admin/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/admin/js/charts-home.js"></script>
    
    <!-- Main File-->
    <script src="/admin/js/front.js"></script>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><a href="pages-profile.html"></a>
            <h2 class="h5">{{Auth::user()->name}}</h2>
            <span>Admin {{Auth::id()}}</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>C</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menú</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="#reservationsDropdown" aria-expanded="false" data-toggle="collapse">Reservaciones</a>
              <ul id="reservationsDropdown" class="collapse list-unstyled ">
                <li><a href="{{route('hotel.checkinOption')}}">Entradas</a></li>
                <li><a href="#">Salidas</a></li>
                <li><a href="#">Hospedados</a></li>
                <li><a href="#">Cancelaciones</a></li>
              </ul>
            </li>
            <li><a href="#invoicesDropdown" aria-expanded="false" data-toggle="collapse">Facturas</a>
              <ul id="invoicesDropdown" class="collapse list-unstyled ">
                <li><a href="#">Ver facturas</a></li>
              </ul>
            </li>
            <li><a href="#roomsDropdown" aria-expanded="false" data-toggle="collapse">Habitaciones</a>
              <ul id="roomsDropdown" class="collapse list-unstyled ">
                <li><a href="#">Disponibles</a></li>
                <li><a href="#">Ocupadas</a></li>
                <li><a href="#">Fuera de servicio</a></li>
                <li><a href="#">Control de limpieza</a></li>
              </ul>
            </li>
            <li><a href="#ecardsDropdown" aria-expanded="false" data-toggle="collapse">Tarjetas electrónicas</a>
              <ul id="ecardsDropdown" class="collapse list-unstyled ">
                <li><a href="#">Asignadas</a></li>
                <li><a href="#">Control de accesos</a></li>
              </ul>
            </li>
            <li><a href="#accountDropdown" aria-expanded="false" data-toggle="collapse">Cuenta</a>
              <ul id="accountDropdown" class="collapse list-unstyled ">
                <li><a href="#">Actualizar información</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a></li>
              </ul>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <main>
        @yield('content')
      </main>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Hotel Tapachula &copy; 2020-2023</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>BETA</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>