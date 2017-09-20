<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
//    protected $with = [
//        'client',
//        'room'
//    ];

    //
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }
}
