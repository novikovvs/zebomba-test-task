<?php

namespace App\Auth\ResourceModels;

use App\User\ResourceModels\UserResource;

class AuthUserResource
{
    public UserResource $userInfo;

    public string $accessToken;

    public function toArray(): array
    {
        return [
            'access_token' => $this->accessToken,
            'user_info'    => $this->userInfo->toArray(),
        ];
    }
}
