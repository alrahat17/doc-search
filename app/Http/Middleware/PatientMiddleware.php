<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;

use Closure;

class PatientMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->user_type != 'patient')
        {
            return new Response(view('unauthorized')->with('user_type', 'Patient'));
        }
        return $next($request);
    }
}
