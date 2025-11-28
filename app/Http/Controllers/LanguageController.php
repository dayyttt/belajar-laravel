<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch(Request $request, $lang)
    {
        $supportedLanguages = ['id', 'en', 'jv', 'su', 'ko', 'ar', 'mlx', 'mak', 'mej', 'mad', 'nlu'];

        if (in_array($lang, $supportedLanguages)) {
            Session::put('locale', $lang);
            App::setLocale($lang);
        }

        return redirect()->back();
    }
}
