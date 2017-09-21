<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;


class ReservationsController extends Controller
{
    /** @var  Reservation $reservationModel */
    protected $reservationModel;
    /** @var  Client $clientModel */
    protected $clientModel;
    /** @var  Room $roomModel */
    protected $roomModel;

    function __construct(Reservation $reservation, Client $client, Room $room)
    {
        $this->reservationModel = $reservation;
        $this->clientModel = $client;
        $this->roomModel = $room;
    }

    //
    public function bookRoom($client_id, $room_id, $date_in, $date_out)
    {

        $client = $this->clientModel->findOrFail($client_id);
        $room = $this->roomModel->findOrFail($room_id);
        $this->reservationModel->date_in = $date_in;
        $this->reservationModel->date_out = $date_out;

        $this->reservationModel->room()->associate($room);
        $this->reservationModel->client()->associate($client);
        if( $this->roomModel->isRoomBooked( $room_id, $date_in, $date_out ) )
        {
            abort(405, 'Trying to book an already booked room');
        }
        $this->reservationModel->save();

        return redirect()->route('clients');
        return view('reservations/bookRoom');
    }

    private function getRoomName()
    {

    }

    public function show($client_id)
    {
        $client = $this->clientModel->findOrFail($client_id);
//        dd($client);

        $reservations = $client->reservations;
//        dd($reservations);

//        $room_ids = $reservations->get('room_id');
//        dd($reservationsRoom_id);

//        $clientRooms = $this->roomModel->findOrFail('id', $room_ids);
//            dd($room_name);
//        $room_names = $clientRooms->name;

        $data = [];
        $data['name'] = $client->name;
        $data['last_name'] = $client->last_name;
        $data['title'] = $client->title;
//        $data['room_names'] = $room_names;
        $data['bookings'] = $reservations;

        return view('bookings/show', $data);
    }
}
