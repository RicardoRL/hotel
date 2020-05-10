@extends('layouts.header')

@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('inicio')}}">Inicio</a></span><a href="{{route('hotel.about')}}"> <span>Acerca de</span></a></p>
          <h1 class="mb-4 bread">Acerca de nosotros</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section ftc-no-pb ftc-no-pt">
  <div class="container">
    <div class="row">
      <div class="col-md-5 p-md-5 img img-2 img-3 d-flex justify-content-center align-items-center" style="background-image: url(images/bg_2.jpg);">
        <a href="https://vimeo.com/45830194" class="icon popup-vimeo d-flex justify-content-center align-items-center">
          <span class="icon-play"></span>
        </a>
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section heading-section-wo-line pt-md-5 mb-5">
          <div class="ml-md-0">
            <span class="subheading">Bienvenidos a Hotel Tapachula</span>
            <h2 class="mb-4">Bienvenidos a nuestro hotel</h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p style="text-align:justify; text-justify: inter-word">Tapachula cuenta con arquitectura única de estilo Art-Decó y atractivos naturales sin comparación.
          En la ciudad se encuentra el Parque Central de Tapachula (Parque Miguel Hidalgo), la Iglesia de San Agustín
          y la Casa de la Cultura, mientras que los alrededores ofrecen oportunidades excepcionales para estar
          en contacto con la naturaleza e historia de la región; la Zona Arqueológica de Izapa, a 10 km de Tapachula, 
          muestra vestigios de la cultura maya. La subida al Volcán Tacaná, al norte de Tapachula, es también una 
          actividad favorita de los visitantes pues desde su cumbre (está a más de 4000 metros sobre el nivel del mar) 
          es posible ver la línea divisoria entre México y Guatemala.
          </p>
          <ul class="ftco-social d-flex">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection