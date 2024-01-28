<?php

namespace App\Auth\Actions;

use App\User\Models\User;
use App\User\DTOs\UserDTO;

class RegisterUserAfterAuthAction
{
    public function execute(UserDTO $DTO): User
    {
        $user = new User();
        $user->fill(array_filter($DTO->toArray()));
        $user->save();

        return $user;
    }
}
