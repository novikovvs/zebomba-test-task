<?php

namespace App\Auth\Presenters;

use App\User\Models\User;
use App\User\Presenters\UserPresenter;
use App\Auth\ResourceModels\AuthUserResource;

class AuthUserPresenter
{
    private UserPresenter $presenter;

    public function __construct(
        UserPresenter $presenter
    ) {
        $this->presenter = $presenter;
    }

    public function present(User $user): AuthUserResource
    {
        $resource = new AuthUserResource();
        $resource->userInfo = $this->presenter->present($user);
        $resource->accessToken = $user->userSession()->first()->access_token;

        return $resource;
    }
}
