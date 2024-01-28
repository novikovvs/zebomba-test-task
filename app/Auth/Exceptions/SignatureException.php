<?php

namespace App\Auth\Exceptions;

use RuntimeException;

class SignatureException extends RuntimeException
{
    protected $message = 'Ошибка авторизации в приложени';

    protected $code = 403;

    protected string $error = 'signature error';

    public function setError(string $error): void
    {
        $this->error = $error;
    }

    public function getError(): string
    {
        return $this->error;
    }
}
