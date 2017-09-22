<?php

namespace App\Http\Controllers;

use App\Transformers\ClientTransformer;
use Dingo\Api\Routing\Helpers;
use App\Models\Client as Client;
use Illuminate\Support\Facades\Input;

class ClientApiController extends ApiController
{
    use Helpers;

    public function getClients()
    {
        // 1. All() is bad
        // 2. No way to attach meta data
        // 3. Linking DB structure to the API output
        // 4. No way to signal headers/response codes

        $clients = Client::paginate(1);

        return $this->response->paginator($clients, new ClientTransformer)->withHeader('X-Foo', 'Bar');

    }
    public function getClientsID($id)
    {

        $clients = Client::find($id);

        if ( ! $clients)
        {
            return $this->response->error('Oh no! looks like we lost one.', 404);
        }
        return $this->response->item($clients, new ClientTransformer)->withHeader('X-Foo', 'Bar');
    }
    public function postClients()
    {
        if ( ! Input::get('name') or ! Input::get('last_name'))
        {
            return $this->response->error('Parameters failed validation for a client.', 422);
        }

        Client::create(Input::all());

        return $this->response->created('clients', "New client created, it's... it's so beautiful.");


    }
}
