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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','GuestController@index')->name('guest')->middleware('visitante');
Route::get('/Perfil','UserController@perfil')->name('perfil');
Route::put('Perfil/{id}','UserController@UpdatePerfil')->name('UpdatePerfil');

