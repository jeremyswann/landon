<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'title',
        'name',
        'last_name',
        'address',
        'post_code',
        'city',
        'state',
        'email'
    ];
//    protected $with = [
//        'reservations'
//    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
