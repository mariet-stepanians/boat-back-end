<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\Login;
use App\Services\Auth\Logout;
use App\Services\Auth\Register;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * @param LoginRequest $request
     * @param Login $login
     * @return JsonResponse
     */
    public function login(LoginRequest $request, Login $login): JsonResponse
    {
        return $login($request->validated());
    }

    /**
     * @param RegisterRequest $request
     * @param Register $register
     * @return JsonResponse
     */
    public function register(RegisterRequest $request, Register $register): JsonResponse
    {
        return $register($request->validated());
    }

    /**
     * @param Logout $logout
     * @return JsonResponse
     */
    public function logout(Logout $logout): JsonResponse
    {
        return $logout();
    }
}
