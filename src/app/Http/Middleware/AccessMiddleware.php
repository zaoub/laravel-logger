<?php

namespace Zaoub\Laravel\App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class AccessMiddleware
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
        $env = config('app.env');

        if ($env == 'production') {
            if (!Auth::check()) {
                return redirect()->route('login');
            }
            $userEmail = Auth::user()->email;
            $accessEmails = explode(',', env('ZAOUB_ZLL_ACCESS', ''));
            if (!in_array($userEmail, $accessEmails)) {
                return redirect()->route('login');
            }
            return $next($request);
        }

        return $next($request);
    }
}