<?php

namespace App\Auth\Actions;

use App\Auth\DTOs\AuthDTO;
use App\Auth\Exceptions\SignatureException;
use App\Auth\ResourceModels\AuthUserResource;

class AuthOrRegisterAction
{
    private CheckAccessSignAction $checkAccessSignAction;

    private AuthAction $authAction;

    public function __construct(
        CheckAccessSignAction $checkAccessSignAction,
        AuthAction $authAction,
    ) {
        $this->checkAccessSignAction = $checkAccessSignAction;
        $this->authAction = $authAction;
    }

    public function execute(AuthDTO $DTO): AuthUserResource
    {
        if (! $this->checkAccessSignAction->execute($DTO)) {
            throw new SignatureException();
        }

        return $this->authAction->execute($DTO);
    }
}
