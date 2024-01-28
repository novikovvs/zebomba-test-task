<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Http\Request;
use App\Auth\Exceptions\SignatureException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function render($request, Throwable $e): Response
    {
        if ($e instanceof SignatureException) {
            return response()->json([
                'success' => false,
                'errors'  => $e->getError(),
                'message' => $e->getMessage(),
            ], $e->getCode());
        }

        return parent::render($request, $e);
    }

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
        });
    }

    /**
     * Determine if the exception handler response should be JSON.
     *
     * @param  Request  $request
     *
     * @return bool
     */
    protected function shouldReturnJson($request, Throwable $e)
    {
        return true;
    }
}
