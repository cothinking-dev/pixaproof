<?php

use Illuminate\Support\Facades\Route;

// Main pages
Route::view('/', 'pages.home')->name('home');
Route::view('/privacy', 'pages.privacy')->name('privacy');

// Contact page (demo request form - kept as separate page)
Route::view('/contact', 'pages.contact')->name('contact');

// Anchor redirects for single-page sections
Route::redirect('/technology', '/#technology', 301);
Route::redirect('/about', '/#about', 301);
Route::redirect('/company/about', '/#about', 301);
Route::redirect('/company/contact', '/contact', 301);

// Legacy 301 redirects for old solution pages (all redirect to homepage use cases section)
Route::redirect('/solutions/loan-draw-inspections', '/#solutions', 301);
Route::redirect('/solutions/insurance-claims', '/#solutions', 301);
Route::redirect('/solutions/kyc-onboarding', '/#solutions', 301);
Route::redirect('/solutions/asset-verification', '/#solutions', 301);
Route::redirect('/solutions/banking', '/#solutions', 301);
Route::redirect('/solutions/insurance', '/#solutions', 301);
Route::redirect('/solutions/real-estate', '/#solutions', 301);
Route::redirect('/solutions/government', '/', 301);
Route::redirect('/solutions/ecommerce', '/', 301);
Route::redirect('/solutions/healthcare', '/', 301);

// Legacy 301 redirects for old resource pages
Route::redirect('/resources/injection-attacks', '/', 301);
Route::redirect('/resources/fraud-statistics', '/', 301);
Route::redirect('/resources/compliance', '/', 301);
Route::redirect('/resources/case-studies', '/', 301);

// 301 Redirects (SEO preservation for removed B2C pages)
Route::permanentRedirect('/pricing', '/contact');
Route::permanentRedirect('/how-it-works', '/#technology');
Route::permanentRedirect('/enterprise', '/#solutions');

// Legacy route alias for technology page
Route::redirect('/product', '/#technology', 301);
