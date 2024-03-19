<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/add-contact', function () {
    return view('add-contact');
});

Route::get('/contacts', function () {
    return view('index');
});
