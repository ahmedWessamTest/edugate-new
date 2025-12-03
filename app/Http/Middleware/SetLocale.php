<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    public function handle($request, Closure $next)
    {
        // ياخد أول جزء في الـ URL
        $locale = $request->segment(1);

        // لو اللغة مدعومة
        if (in_array($locale, ['en', 'ar'])) {
            App::setLocale($locale);         // يغيّر لغة التطبيق
            Session::put('lang', $locale);   // يحفظ اللغة في session
        } else {
            // لو مش مدعومة ممكن تعمل redirect للغة افتراضية
            $default = 'en';
            return redirect($default . '/' . $request->path());
        }

        return $next($request);
    }
}
