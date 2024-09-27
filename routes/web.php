<?php

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
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

Route::get('/posts', function () {
    $data['title'] = 'All Post';
    $data['posts'] = Post::filter(request(['keyword','author','category']))->get();
    return view('posts', $data);
});

Route::get('/read/{post:slug}', function (Post $post) {
    $data['title'] = 'Post Detail';
    $data['post'] = $post;
    return view('read', $data);
});
