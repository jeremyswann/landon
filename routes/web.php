<?php

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

Route::get('/', 'ContentsController@home')->name('home');
Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/new', 'ClientController@newClient')->name('new_client');
Route::post('/clients/new', 'ClientController@newClient')->name('create_client');
Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');

Route::get('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check_room');

Route::get('/book/room/{client_id}/{room_id}/{date_in}/{date_out}', 'ReservationsController@bookRoom')->name('book_room');

Route::get('/bookings/{client_id}', 'ReservationsController@show')->name('show_bookings');


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here lies the RESTful Dingo API Routes, arr...
|
*/

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {

    $api->get('api/users', 'UserController@getUsers');
});
$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {

    $api->get('api/clients', 'ClientController@getUsers');
});