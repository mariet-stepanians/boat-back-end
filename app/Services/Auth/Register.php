<?php

namespace App\Services\Auth;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class Register
{
    /**
     * @param $request
     * @return JsonResponse
     */
    public function __invoke($request): JsonResponse
    {
        try {
            $request['password'] = Hash::make($request['password']);
            $user = User::create($request);

            return response()->json([
                'message' => 'User successfully registered',
                'user' => $user
            ], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }

    }
}
