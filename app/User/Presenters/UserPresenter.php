<?php

namespace App\User\Presenters;

use App\User\Models\User;
use App\User\ResourceModels\UserResource;

class UserPresenter
{
    public function present(User $user): UserResource
    {
        $resource = new UserResource();
        $resource->id = $user->id;
        $resource->city = $user->city;
        $resource->country = $user->country;
        $resource->lastName = $user->last_name;
        $resource->firstName = $user->first_name;
        $resource->accessToken = $user->userSession->access_token;

        return $resource;
    }
}
