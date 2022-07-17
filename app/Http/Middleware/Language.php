<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;


use Closure;
use Illuminate\Http\Request;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session()->has('locale') and array_key_exists(Session()->get('locale'), config('app.languages'))) {
            App::setLocale(Session()->get('locale'));
        } else {
            App::setLocale(config('app.fallback_locale'));
        }
        return $next($request);
    }
}
