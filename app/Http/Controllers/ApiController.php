<?php
/**
 * Created by PhpStorm.
 * User: jeremyswan
 * Date: 22/09/2017
 * Time: 3:34 PM
 */

namespace App\Http\Controllers;


class ApiController extends Controller
{

    protected $statusCode;

    /**
     * @return mixed
     */

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return mixed $statusCode
     */

    public function setStatusCode($statusCode)
    {
        return $this->statusCode = $statusCode;
    }

    public function respondNotFound($message = 'Not Found!')
    {
        return Response::json([
            'error' => [
                'message' => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }
}