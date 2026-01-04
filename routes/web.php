<?php

use Illuminate\Support\Facades\Route;

// Main pages
Route::view('/', 'pages.home')->name('home');
Route::view('/about', 'pages.about')->name('about');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/privacy', 'pages.privacy')->name('privacy');

// Product pages (Community Edition)
Route::view('/how-it-works', 'pages.how-it-works')->name('how-it-works');
Route::view('/product', 'pages.technology')->name('product');
Route::view('/pricing', 'pages.pricing')->name('pricing');

// Enterprise pages
Route::view('/enterprise', 'pages.enterprise.index')->name('enterprise');
Route::view('/developers', 'pages.developers')->name('developers');

// Solutions pages (Enterprise)
Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::view('/banking', 'pages.solutions.banking')->name('banking');
    Route::view('/insurance', 'pages.solutions.insurance')->name('insurance');
    Route::view('/government', 'pages.solutions.government')->name('government');
    Route::view('/ecommerce', 'pages.solutions.ecommerce')->name('ecommerce');
    Route::view('/healthcare', 'pages.solutions.healthcare')->name('healthcare');
});

// Development only routes
if (app()->environment('local')) {
    Route::view('/components', 'pages.components')->name('components');
}
