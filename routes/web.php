<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = Post::latest()->simplepaginate(10);
    return view('posts', ['title' => 'My Blog', 'posts' => $posts]);
});

Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'Surya', 'title' => 'Contact Me']);
});

Route::get('/penulis/{user:username}', function (User $user) {
    $posts = $user->posts()->latest()->simplepaginate(5);
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    $posts = $category->posts()->latest()->simplepaginate(5);
    return view('posts', ['title' => count($category->posts) . ' Category ' . $category->name, 'posts' => $posts]);
});