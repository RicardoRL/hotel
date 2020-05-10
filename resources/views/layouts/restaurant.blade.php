@extends('layouts.header')

@section('content')
<div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
      <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
        <div class="text">
          <p class="breadcrumbs mb-2"><span class="mr-2"><a href="{{route('inicio')}}">Inicio</a></span><a href="{{route('hotel.about')}}"> <span>Acerca de</span></a></p>
          <h1 class="mb-4 bread">Restaurante</h1>
        </div>
      </div>
    </div>
  </div>
</div>
@include('partials.restaurant_menu')
@endsection