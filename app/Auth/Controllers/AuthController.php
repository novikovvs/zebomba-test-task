<?php

namespace App\Auth\Controllers;

use Illuminate\Http\JsonResponse;
use App\Auth\Requests\AuthRequest;
use App\Auth\Factories\AuthFactory;
use App\Auth\Actions\AuthOrRegisterAction;
use App\Http\Controllers\AbstractController;

class AuthController extends AbstractController
{
    public function auth(AuthRequest $request, AuthOrRegisterAction $action): JsonResponse
    {
        return $this->success(
            $action->execute(
                AuthFactory::fromRequest($request)
            )->toArray()
        );
    }
}
