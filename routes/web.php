<?php

use App\Models\Post;
use App\Models\User;
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

Route::get('/post', function () {
    $data['title'] = 'POSTS';
    $data['posts'] = Post::all();
    return view('posts', $data);
});

Route::get('/post/{post:slug}', function (Post $post) {
    $data['title'] = 'POST';
    $data['post'] = $post;
    return view('post', $data);
});

Route::get('/author/{user:unix}', function (User $user) {
    $data['title'] = 'POSTS';
    $data['posts'] = $user->postsList;
    return view('posts', $data);
});
