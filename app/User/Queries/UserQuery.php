<?php

namespace App\User\Queries;

use App\User\Models\User;

class UserQuery
{
    public function findById(int $id)
    {
        return User::query()->whereId($id)->first();
    }
}
