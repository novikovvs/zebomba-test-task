<?php

namespace App\User\ResourceModels;

class UserResource
{
    public int $id;

    public string $firstName;

    public string $lastName;

    public string $city;

    public string $country;

    public string $accessToken;

    public function toArray(): array
    {
        return [
            'id'         => $this->id,
            'first_name' => $this->firstName,
            'last_name'  => $this->lastName,
            'country'    => $this->country,
            'city'       => $this->city,
        ];
    }
}
