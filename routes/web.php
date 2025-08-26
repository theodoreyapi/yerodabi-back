<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login-cover');
});
Route::get('register', function () {
    return view('auth.register-cover');
});
Route::get('forgot', function () {
    return view('auth.forgot-password-cover');
});
Route::get('two-step', function () {
    return view('auth.two-step-verification-cover');
});
Route::get('reset', function () {
    return view('auth.reset-password-cover');
});
Route::get('change', function () {
    return view('auth.success-cover');
});


Route::get('privacy', function () {
    return view('terms.privacy-policy');
});
Route::get('terms', function () {
    return view('terms.terms-and-conditions');
});


Route::get('index', function () {
    return view('dashboard.index');
});
