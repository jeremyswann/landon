<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dingo\Api\Routing\Helpers;

class UserController extends User
{
    use Helpers;

    public function show($id)
    {
        $user = User::findOrFail($id);

        return $this->response->array($user->toArray());
    }
}