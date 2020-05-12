<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', function () {
    return view('layouts.home');
})->name('inicio');

Route::post('/verificar', 'HotelController@disponibilidad')->name('hotel.disponibilidad');
Route::post('/store/reservation', 'HotelController@store')->name('hotel.store');
Route::post('/admin/update/reservation', 'HotelController@updateCheckin')->name('hotel.updCheckin');
Route::post('/admin/update/checkout', 'HotelController@updateCheckout')->name('hotel.updCheckout');
Route::post('/admin/update/availability', 'HotelController@setAvailability')->name('hotel.setAvailability');
Route::post('/admin/update/cleaning', 'HotelController@sendCleaning')->name('hotel.sendCleaning');
Route::post('/admin/filter', 'HotelController@filterById')->name('hotel.filterById');
Route::get('/cliente/form', 'HotelController@showClientForm')->name('hotel.form');
Route::get('/habitaciones/disponibles', 'HotelController@rooms')->name('hotel.rooms');
Route::get('/restaurante', 'HotelController@restaurant')->name('hotel.restaurant');
Route::get('/acerca_de', 'HotelController@about')->name('hotel.about');
Route::get('/contacto', 'HotelController@contact')->name('hotel.contact');
Route::get('/admin/menu', 'HotelController@adm')->name('hotel.adm');
Route::get('/admin/menu/reservation/checkin', 'HotelController@checkinOption')->name('hotel.checkinOption');
Route::get('/admin/menu/reservation/checkout', 'HotelController@checkoutOption')->name('hotel.checkoutOption');
Route::get('/admin/menu/reservation/guests', 'HotelController@guestsOption')->name('hotel.guestsOption');
Route::get('/admin/menu/reservation/cancel', 'HotelController@cancelOption')->name('hotel.cancelOption');
Route::get('/admin/menu/rooms/available', 'HotelController@availableOption')->name('hotel.availableOption');
Route::get('/admin/menu/rooms/busy', 'HotelController@busyOption')->name('hotel.busyOption');
Route::get('/admin/menu/rooms/out', 'HotelController@outOption')->name('hotel.outOption');
Route::get('/admin/menu/rooms/cleaning', 'HotelController@cleaningOption')->name('hotel.cleaningOption');
Route::get('/admin/menu/invoices', 'HotelController@invoiceOption')->name('hotel.invoiceOption');
Route::get('/admin/menu/ecards', 'HotelController@ecardOption')->name('hotel.ecardOption');
Route::get('/admin/menu/ecards/access', 'HotelController@accessOption')->name('hotel.accessOption');

Route::get('/home', 'HomeController@index')->name('home');
