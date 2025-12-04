<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

// Redirect root to default locale
// Route::get('/', function () {
//     return redirect('/en');
// });

// Localized routes
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {
    Route::get('/', function () {
        return view('frontend.home');
    })->name('home');
    
    Route::get('/about', function () {
        return view('frontend.about');
    })->name('about');
});
