<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if there's a locale in the session first
        if (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        } else {
            App::setLocale(config('app.locale'));
        }

        // Handle URL-based language switching (/language/{locale})
        $path = $request->path();
        if (preg_match('/^language\/([a-z]{2,})$/', $path, $matches)) {
            $locale = $matches[1];
            $supportedLanguages = ['id', 'en', 'jv', 'su', 'ko', 'ar', 'mlx', 'mak', 'mej', 'mad', 'nlu'];

            if (in_array($locale, $supportedLanguages)) {
                App::setLocale($locale);
                Session::put('locale', $locale);
                // Redirect back to remove the language segment from URL
                $cleanUrl = preg_replace('/^language\/[a-z]{2,}\//', '', $path);
                return redirect($cleanUrl ?: '/');
            }
        }

        // Handle query parameter language switching (?lang=locale)
        if ($request->has('lang')) {
            $locale = $request->get('lang');
            if (in_array($locale, ['en', 'id', 'jv', 'su', 'ko', 'ar', 'mlx', 'mak', 'mej', 'mad', 'nlu'])) {
                App::setLocale($locale);
                Session::put('locale', $locale);
            }
        }

        return $next($request);
    }
}
