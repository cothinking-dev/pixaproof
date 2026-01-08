<?php

use Illuminate\Support\Facades\Route;

// Main pages
Route::view('/', 'pages.home')->name('home');
Route::view('/privacy', 'pages.privacy')->name('privacy');

// Company pages
Route::prefix('company')->name('company.')->group(function () {
    Route::view('/about', 'pages.company.about')->name('about');
    Route::view('/contact', 'pages.company.contact')->name('contact');
});

// Legacy routes (keep for compatibility)
Route::view('/about', 'pages.company.about')->name('about');
Route::view('/contact', 'pages.company.contact')->name('contact');

// Technology page (PIEA)
Route::view('/technology', 'pages.technology')->name('product');

// Solutions pages (Enterprise - 6 industries)
Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::view('/banking', 'pages.solutions.banking')->name('banking');
    Route::view('/insurance', 'pages.solutions.insurance')->name('insurance');
    Route::view('/government', 'pages.solutions.government')->name('government');
    Route::view('/ecommerce', 'pages.solutions.ecommerce')->name('ecommerce');
    Route::view('/healthcare', 'pages.solutions.healthcare')->name('healthcare');
    Route::view('/real-estate', 'pages.solutions.real-estate')->name('real-estate');
});

// Resources pages (4 articles)
Route::prefix('resources')->name('resources.')->group(function () {
    Route::view('/injection-attacks', 'pages.resources.injection-attacks')->name('injection-attacks');
    Route::view('/fraud-statistics', 'pages.resources.fraud-statistics')->name('fraud-statistics');
    Route::view('/compliance', 'pages.resources.compliance')->name('compliance');
    Route::view('/case-studies', 'pages.resources.case-studies')->name('case-studies');
});

// 301 Redirects (SEO preservation for removed B2C pages)
// These ensure old URLs redirect to new enterprise-focused structure
Route::permanentRedirect('/pricing', '/company/contact');
Route::permanentRedirect('/how-it-works', '/technology');
Route::permanentRedirect('/enterprise', '/solutions/banking');  // Redirect to primary solution page

// Development only routes
if (app()->environment('local')) {
    Route::view('/components', 'pages.components')->name('components');
}
