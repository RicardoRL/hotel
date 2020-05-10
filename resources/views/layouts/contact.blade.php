@extends('layouts.header')

@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('inicio')}}">Inicio</a></span><a href="{{route('hotel.about')}}"> <span>Acerca de</span></a></p>
          <h1 class="mb-4 bread">Contáctanos</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
      <div class="col-md-12 mb-4">
        <h2 class="h3">Información de contacto</h2>
      </div>
      <div class="w-100"></div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Dirección:</span> 19ª Calle Poniente N° 17, Col. Centro, C.P. 30700, Tapachula, Chiapas, México.</p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Teléfono:</span> <a href="tel://1234567920">01 (612) 175 0860</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Facebook:</span> <a href="mailto:info@yoursite.com">@hoteltapachula</a></p>
        </div>
      </div>
      <div class="col-md-3 d-flex">
        <div class="info bg-white p-4">
          <p><span>Sitio web</span> <a href="#">http://hotel_tap.test/</a></p>
        </div>
      </div>
    </div>
    <div class="row block-9">
      <div class="col-md-6 order-md-last d-flex">
        <form action="#" class="bg-white p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Asunto">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Mensaje"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Enviar mensaje" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      
      </div>

      <div class="col-md-6 d-flex">
        <div id="map" class="bg-white"></div>
      </div>
    </div>
  </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
@endsection