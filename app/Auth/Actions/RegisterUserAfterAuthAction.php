<?php

namespace App\Auth\Actions;

use App\User\Models\User;
use App\User\DTOs\UserDTO;

class RegisterUserAfterAuthAction
{
    public function execute(UserDTO $DTO): User
    {
        $user = new User();
        $user->fill($DTO->toArray());
        $user->save();
        $user->userSession()->create($DTO->toArray());

        return $user;
    }
}
