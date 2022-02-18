<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected function respondWithToken($token,$user): JsonResponse
    {
        Auth::factory()->setTTL(1200);

        return response()->json([
            'access_token' => $token,
            'user'  => $user,
            'token_type' => 'bearer',
            'expires_in' =>  Auth::factory()->getTTL() * 60
        ], 200);
    }

    protected function response($json, $status): JsonResponse
    {
        return response()->json(["data" => $json],$status);
    }
}
