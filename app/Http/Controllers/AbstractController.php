<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class AbstractController
{
    public function success($mixed): JsonResponse
    {
        return response()->json(['status' => 'success', 'result' => $mixed, 'errors' => null]);
    }
}
