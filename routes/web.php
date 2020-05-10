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
Route::get('/cliente', 'HotelController@showClientForm')->name('hotel.form');
Route::post('/store/reservation', 'HotelController@store')->name('hotel.store');
Route::get('/habitaciones', 'HotelController@rooms')->name('hotel.rooms');
Route::get('/restaurante', 'HotelController@restaurant')->name('hotel.restaurant');
Route::get('/acerca_de', 'HotelController@about')->name('hotel.about');
Route::get('/contacto', 'HotelController@contact')->name('hotel.contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
