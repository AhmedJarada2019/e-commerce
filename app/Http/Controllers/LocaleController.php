<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function setLocale($locale)
{
    if (array_key_exists($locale, config('app.available_locales'))) {
        session(['locale' => $locale]);
        return redirect()->route('home');
    }
    return response()->json(['success' => false]);
}

}
