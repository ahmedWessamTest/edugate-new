<?php

use Illuminate\Support\Facades\Route;

$locales = ['en', 'ar'];

Route::group(['prefix' => '{locale}', 'where' => ['locale' => 'en|ar']], function () {
    Route::get('/', function ($locale) {
        session(['lang' => $locale]);
        return view('frontend.home');
    })->name('home');
    Route::get('/about', function ($locale) {
        session(['lang' => $locale]);
        return view('frontend.about');
    })->name('about');
});

