<?php

namespace App\Auth\Actions;

use App\User\Models\User;
use App\User\DTOs\UserDTO;

class UpdateUserAfterAuthAction
{
    public function execute(UserDTO $DTO, User $user): User
    {
        $user->update(array_filter($DTO->toArray()));
        $user->userSession()->updateOrCreate(['user_id' => $user->id], ['access_token' => $DTO->accessToken]);

        return $user;
    }
}
