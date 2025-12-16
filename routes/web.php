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

    Route::get('/services', function () {
        return view('frontend.services');
    })->name('services');
    Route::get('/subCategory', function () {
        return view('frontend.subCategory');
    })->name('subCategory');

    Route::get('/blogs', function () {
        if (view()->exists('frontend.blogs')) {
            return view('frontend.blogs');
        }
        abort(404);
    })->name('blogs');

    Route::get('/blog-detail/{slug}', function ($slug) {
        if (view()->exists('frontend.blog-detail')) {
            return view('frontend.blog-detail', compact('slug'));
        }
        abort(404);
    })->name('blog-detail');

    Route::get('/contact-us', function () {
        if (view()->exists('frontend.contact-us')) {
            return view('frontend.contact-us');
        }
        abort(404);
    })->name('contact-us');

    Route::get('/gallery', function () {
        if (view()->exists('frontend.gallery')) {
            return view('frontend.gallery');
        }
        abort(404);
    })->name('gallery');

    Route::get('/admission-form', function () {
        if (view()->exists('frontend.admission-form')) {
            return view('frontend.admission-form');
        }
        abort(404);
    })->name('admission-form');

    Route::get('/related-blogs', function () {
        if (view()->exists('frontend.related-blogs')) {
            return view('frontend.related-blogs');
        }
        abort(404);
    })->name('related-blogs');
});
