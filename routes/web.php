<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('page.login');
});
Route::get('/dashboard', function () {
    return view('page.dashboard');
});
Route::get('/jenis', function () {
    return view('page.masterbarang.jenis.index');
});
