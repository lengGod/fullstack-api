<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $role = $request->header('Role');

        if ($role === 'admin') {
            return $next($request);
        } elseif ($role === 'user') {
            if ($request->isMethod('get')) {
                return $next($request);
            } else {
                return response()->json(['message' => 'Unauthorized'], 403);
            }
        }

        return response()->json(['message' => 'Role not found or invalid'], 401);
    }
}
