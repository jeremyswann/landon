<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Client;

class ClientTransformer extends TransformerAbstract
{
    public function transform(Client $client)
    {
        return [
            'title' => $client->title,
            'name' => $client->name,
            'surname' => $client->last_name
        ];
    }
}
