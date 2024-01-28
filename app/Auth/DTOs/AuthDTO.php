<?php

namespace App\Auth\DTOs;

class AuthDTO
{
    public string $accessToken;

    public int $id;

    public string $firstName;

    public string $lastName;

    public string $country;

    public string $city;

    public string $sig;

    public function toArray(): array
    {
        return [
            'access_token' => $this->accessToken,
            'id'           => $this->id,
            'first_name'   => $this->firstName,
            'last_name'    => $this->lastName,
            'country'      => $this->country,
            'city'         => $this->city,
            'sig'          => $this->sig,
        ];
    }
}
