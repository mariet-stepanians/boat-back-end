<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        if (auth()->check()) {
            $authRoles = auth()->user()->role->name;
            if (in_array($authRoles, $role)) {
                return $next($request);
            }
            return response()->json([
                'message' => 'Permission Denied',
                'status' => 403
            ], 403);
        }
        return response()->json([
            'message' => 'Unauthorized',
            'status' => 403
        ], 403);
    }
}
