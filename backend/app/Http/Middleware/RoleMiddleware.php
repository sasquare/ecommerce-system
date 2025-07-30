<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $role = $request->query('role', 'user');
        if (!in_array($role, ['user', 'admin'])) {
            abort(403, 'Invalid role');
        }
        $request->attributes->set('role', $role);
        return $next($request);
    }
}