<?php

namespace App\Services\Auth;

use Illuminate\Http\JsonResponse;

class Logout
{
    /**
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        try {
            auth()->logout();

            return response()->json(['message' => 'User successfully logged out.']);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
