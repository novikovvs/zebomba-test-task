<?php

namespace App\Auth\Actions;

use App\User\Models\User;
use App\User\DTOs\UserDTO;

class UpdateUserAfterAuthAction
{
    public function execute(UserDTO $DTO, User $user): User
    {
        $user->update($DTO->toArray());
        $user->userSession()->update(['access_token' => $DTO->accessToken]);

        return $user;
    }
}
