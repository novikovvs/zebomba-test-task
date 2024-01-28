<?php

namespace App\Auth\Actions;

use App\Auth\DTOs\AuthDTO;

class CheckAccessSignAction
{
    public function execute(AuthDTO $DTO): bool
    {
        $claims = $DTO->toArray();
        unset($claims['sig']);
        ksort($claims);
        $claims = implode('', array_map(
            function ($v, $k) {
                return sprintf('%s=%s', $k, $v);
            },
            $claims,
            array_keys($claims)
        ));

        return mb_strtolower(md5($claims . config('app.key')), 'UTF-8') === $DTO->sig;
    }
}
