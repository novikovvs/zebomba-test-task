<?php

namespace App\User\Factories;

use App\User\DTOs\UserDTO;

class UserFactory
{
    public static function fromArray(array $userData): UserDTO
    {
        $dto = new UserDTO();

        $dto->id = $userData['id'] ?? null;
        $dto->firstName = $userData['first_name'] ?? null;
        $dto->lastName = $userData['last_name'] ?? null;
        $dto->country = $userData['country'] ?? null;
        $dto->city = $userData['city'] ?? null;
        $dto->accessToken = $userData['access_token'] ?? null;

        return $dto;
    }
}
