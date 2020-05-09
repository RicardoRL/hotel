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
        <form action="#" class="booking-form">
          <div class="row">
            <div class="col-md d-flex py-md-4">
              <div class="form-group align-self-stretch d-flex align-items-end">
                <div class="wrap bg-white align-self-stretch py-3 px-4">
                  <label for="#">Check-in</label>
                  <input type="text" class="form-control checkin_date" placeholder="Check-in date">
                </div>
              </div>
            </div>
            <div class="col-md d-flex py-md-4">
              <div class="form-group align-self-stretch d-flex align-items-end">
                <div class="wrap bg-white align-self-stretch py-3 px-4">
                  <label for="#">Check-out</label>
                  <input type="text" class="form-control checkout_date" placeholder="Check-out date">
                </div>
              </div>
            </div>
            <div class="col-md d-flex py-md-4">
              <div class="form-group align-self-stretch d-flex align-items-end">
                <div class="wrap bg-white align-self-stretch py-3 px-4">
                  <label for="#">Habitación</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Sencilla</option>
                        <option value="">Doble</option>
                        <option value="">Suite</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex py-md-4">
              <div class="form-group align-self-stretch d-flex align-items-end">
                <div class="wrap bg-white align-self-stretch py-3 px-4">
                  <label for="#">Personas</label>
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">1 Adulto</option>
                        <option value="">2 Adultos</option>
                        <option value="">3 Adultos</option>
                        <option value="">4 Adultos</option>
                        <option value="">5 Adultos</option>
                        <option value="">6 Adultos</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md d-flex">
              <div class="form-group d-flex align-self-stretch">
                <a href="#" class="btn btn-black py-5 py-md-3 px-4 align-self-stretch d-block">
                  <span>Checar disponibilidad 
                    <small>Los mejores precioss garantizados</small>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection