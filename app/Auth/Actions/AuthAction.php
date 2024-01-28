<?php

namespace App\Auth\Actions;

use App\Auth\DTOs\AuthDTO;
use App\User\Queries\UserQuery;
use App\User\Factories\UserFactory;
use App\Auth\Presenters\AuthUserPresenter;
use App\Auth\ResourceModels\AuthUserResource;

class AuthAction
{
    private UserQuery $query;

    private UpdateUserAfterAuthAction $updateUserAfterAuthAction;

    private RegisterUserAfterAuthAction $registerUserAfterAuthAction;

    private AuthUserPresenter $presenter;

    public function __construct(
        UserQuery $query,
        UpdateUserAfterAuthAction $updateUserAfterAuthAction,
        RegisterUserAfterAuthAction $registerUserAfterAuthAction,
        AuthUserPresenter $presenter
    ) {
        $this->query = $query;
        $this->updateUserAfterAuthAction = $updateUserAfterAuthAction;
        $this->registerUserAfterAuthAction = $registerUserAfterAuthAction;
        $this->presenter = $presenter;
    }

    public function execute(AuthDTO $DTO): AuthUserResource
    {
        if ($user = $this->query->findById($DTO->id)) {
            return $this->presenter->present($this->updateUserAfterAuthAction->execute(UserFactory::fromArray($DTO->toArray()), $user));
        }

        return $this->presenter->present($this->registerUserAfterAuthAction->execute(UserFactory::fromArray($DTO->toArray())));
    }
}
