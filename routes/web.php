<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/landing', function () {
    return view('index');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});