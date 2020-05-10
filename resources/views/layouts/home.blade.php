@extends('layouts.header')

@section('content')
<div class="hero">
  <div class="container-wrap d-flex justify-content-end align-items-end">
    <a href="https://www.youtube.com/watch?v=ism1XqnZJEg" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
      <span class="ion-ios-play play"></span>
    </a>
  </div>
  <section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(../img/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
        <div class="col-md-8 ftco-animate">
          <div class="text mb-5 pb-5">
            <h1 class="mb-3">Hotel Tapachula</h1>
            <h2>Más que un hotel... una experiencia</h2>
          </div>
        </div>
      </div>
      </div>
    </div>
    <div class="slider-item" style="background-image:url(../img/bg_2.jpg);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center">
        <div class="col-md-8 ftco-animate">
          <div class="text mb-5 pb-5">
            <h1 class="mb-3">Experimenta algo distinto</h1>
            <h2>Hotel Tapachula &amp; Resort</h2>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>
</div>
<section class="ftco-booking ftco-section ftco-no-pt ftco-no-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 pr-1 aside-stretch">
        <form action="{{route('hotel.disponibilidad')}}" method="POST" class="booking-form" autocomplete="off">
          @csrf
          <div class="row">
            <div class="col-md d-flex py-md-4">
              <div class="form-group align-self-stretch d-flex align-items-end">
                <div class="wrap bg-white align-self-stretch py-3 px-4">
                  <label for="check_in">Check-in</label>
                  <input type="text" class="form-control checkin_date" placeholder="Check-in date" name="check_in">
                </div>
              </div>
            </div>
            <div class="col-md d-flex py-md-4">
              <div class="form-group align-self-stretch d-flex align-items-end">
                <div class="wrap bg-white align-self-stretch py-3 px-4">
                  <label for="check_out">Check-out</label>
                  <input type="text" class="form-control checkout_date" placeholder="Check-out date" name="check_out">
                </div>
              </div>
            </div>
            <div class="col-md d-flex py-md-4">
              <div class="form-group align-self-stretch d-flex align-items-end">
                <div class="wrap bg-white align-self-stretch py-3 px-4">
                  <label for="cuartos">Habitación</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="cuartos" id="" class="form-control">
                        <option value="sencilla">Sencilla</option>
                        <option value="doble">Doble</option>
                        <option value="suite">Suite</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex py-md-4">
              <div class="form-group align-self-stretch d-flex align-items-end">
                <div class="wrap bg-white align-self-stretch py-3 px-4">
                  <label for="personas">Personas</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="personas" id="" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex">
              <div class="form-group d-flex align-self-stretch">
                <button type="submit" class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block">
                  <span>Checar disponibilidad 
                    <small>Los mejores precioss garantizados</small>
                  </span>
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@include('partials.services')
@include('partials.services_options')
@include('partials.about_rooms')
@include('partials.video_presentation')
@endsection