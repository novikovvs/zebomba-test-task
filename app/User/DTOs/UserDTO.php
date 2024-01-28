<?php

namespace App\User\DTOs;

class UserDTO
{
    public ?string $firstName;

    public ?string $lastName;

    public ?string $city;

    public ?string $country;

    public ?string $accessToken;

    public function toArray(): array
    {
        return [
            'first_name'   => $this->firstName,
            'last_name'    => $this->lastName,
            'country'      => $this->country,
            'city'         => $this->city,
            'access_token' => $this->accessToken,
        ];
    }
}
