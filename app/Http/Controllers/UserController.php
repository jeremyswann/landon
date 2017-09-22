<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Transformers\UserTransformer;
use Dingo\Api\Routing\Helpers;
use App\Models\User;

class UserController extends Controller
{
    use Helpers;

    public function getUsers()
    {

        $users = User::all();

        return $this->response->collection($users, new UserTransformer);

    }
}