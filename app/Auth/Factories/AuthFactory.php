<?php

namespace App\Auth\Factories;

use App\Auth\DTOs\AuthDTO;
use App\Auth\Requests\AuthRequest;

class AuthFactory
{
    public static function fromRequest(AuthRequest $request): AuthDTO
    {
        $instance = new AuthDTO();

        $instance->id = (int) $request->get('id');
        $instance->city = $request->get('city');
        $instance->accessToken = $request->get('access_token');
        $instance->sig = $request->get('sig');
        $instance->firstName = $request->get('first_name');
        $instance->lastName = $request->get('last_name');
        $instance->country = $request->get('country');

        return $instance;
    }
}
