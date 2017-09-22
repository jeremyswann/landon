<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Client;

class ClientTransformer extends TransformerAbstract
{
    public function transform(Client $client)
    {
        return [
            'client_id' => $client->id,
            'name' => $client->name,
            'last_name' => $client->last_name,
            'title' => $client->title,
            'address' => $client->address,
            'city' => $client->city,
            'state' => $client->state,
            'email' => $client->email,
            'post_code' => $client->post_code,
            'added' => date('Y-m-d', strtotime($client->created_at))
        ];
    }
}
