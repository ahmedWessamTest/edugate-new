<?php

use Illuminate\Support\Facades\Route;

Route::get('/lang/{locale}', function ($locale) {
    if (! in_array($locale, ['ar', 'en'])) {
        abort(400);
    }

    session(['lang' => $locale]);
    return redirect()->back();
})->name('lang.switch');

Route::get('/', function () {
    return view('master');
});
