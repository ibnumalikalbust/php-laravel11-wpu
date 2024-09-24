<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $data['title'] = 'HOME';
    return view('home', $data);
});

Route::get('/about', function () {
    $data['title'] = 'ABOUT';
    $data['developer'] = 'Habibullah';
    return view('about', $data);
});

Route::get('/contact', function () {
    $data['title'] = 'CONTACT';
    $data['facebook'] = 'https://facebook.com/ibnumalikalbust';
    $data['instagram'] = 'https://instagram.com/ibnumalikalbust';
    $data['twitter'] = 'https://twitter.com/ibnumalikalbust';
    $data['tiktok'] = 'https://tiktok.com/@ibnumalikalbust';
    return view('contact', $data);
});

Route::get('/blog', function () {
    $data['title'] = 'BLOG';
    $data['articles'][1]['title'] = 'Fazzdev';
    $data['articles'][1]['paragraph1'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, maiores!';
    $data['articles'][1]['paragraph2'] = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate saepe repudiandae, ipsum fuga cum maxime officia placeat laboriosam modi alias?';
    $data['articles'][2]['title'] = 'Fazznet';
    $data['articles'][2]['paragraph1'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, maiores!';
    $data['articles'][2]['paragraph2'] = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate saepe repudiandae, ipsum fuga cum maxime officia placeat laboriosam modi alias?';
    return view('blog', $data);
});