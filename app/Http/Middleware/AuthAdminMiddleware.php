<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        if (session('role') == 'admin_daskrimti' || session('role') == 'admin_umum') {
            return redirect()->route('adminDashboard');
        } elseif (session('role') == 'user') {
            return redirect()->route('user');
        }




        return $next($request);
    }
}
