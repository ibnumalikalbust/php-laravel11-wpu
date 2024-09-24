<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $data['developer'] = 'Habibullah';
    return view('about', $data);
});