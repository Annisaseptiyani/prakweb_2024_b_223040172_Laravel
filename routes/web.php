<?php
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home',['title'=> 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => 'Annisa septiyani','title'=>'Contact']);
});



Route::get('/posts', function () {
    return view('posts',['title'=>'Blog','posts'=>Post::all()]);
});

Route::get('/post/{slug}', function($slug){
    $posts = [
        [
        'id'=> 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Annisa septiyani',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos praesentium 
    nisi eum quia voluptatibus ab vel ad cum. Vero, adipisci dolorem exercitationem esse illum 
    aliquid labore nobis ea. Impedit.'
    ]];
    $posts = Post::find($slug);
return view('posts',['title' => 'Single Post', 'posts' => $posts]);

});

Route::get('/contact', function () {
    return view('contact',['title'=>'Contact']);
});
