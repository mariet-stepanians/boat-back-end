<?php

namespace App\Services\Auth;

use Illuminate\Http\JsonResponse;

class Login
{
    /**
     * @param $request
     * @return JsonResponse
     */
    public function __invoke($request): JsonResponse
    {
        try {
            if (!$token = auth()->attempt($request)) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
            return $this->respondWithToken($token);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return JsonResponse
     */
    protected function respondWithToken(string $token): JsonResponse
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => auth()->user()
        ]);
    }
}
