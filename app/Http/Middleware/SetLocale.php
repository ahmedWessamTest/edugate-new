<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Supported locales
     */
    protected array $supportedLocales = ['en', 'ar'];

    /**
     * Default locale
     */
    protected string $defaultLocale = 'ar';

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Get the first segment of the URL as locale
        $locale = $request->segment(1);

        // If locale is supported, set it
        if (in_array($locale, $this->supportedLocales)) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            return $next($request);
        }

        // If no locale or unsupported locale, redirect to default locale
        // Get the current path without the invalid locale prefix
        $path = $request->path();
        
        // If path is just '/' or empty, redirect to default locale home
        if ($path === '/' || empty($path)) {
            return redirect($this->defaultLocale);
        }

        // If path starts with invalid locale, remove it
        if (in_array($locale, $this->supportedLocales) === false && !empty($locale)) {
            $segments = $request->segments();
            array_shift($segments); // Remove first segment (invalid locale)
            $newPath = implode('/', $segments);
            return redirect($this->defaultLocale . '/' . $newPath);
        }

        // No locale prefix, add default locale
        return redirect($this->defaultLocale . '/' . $path);
    }
}
