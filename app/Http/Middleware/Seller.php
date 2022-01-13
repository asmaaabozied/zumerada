<?php

namespace App\Http\Middleware;

use Closure;

class Seller
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
        if (auth()->user()) {
            if (auth()->user()->where('type', ['seller', 'User'])) {

                return $next($request);

            } else {

                return redirect(route('logins'));

            }
        }
        else {
            return redirect(route('logins'));
        }
    }
}
