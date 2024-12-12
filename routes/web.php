<?php

use App\Http\Controllers\BlogController;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home',['title'=> 'Home Page']);
});

Route::get('/about', function () {
    return view('about',['name' => 'Annisa septiyani','title'=>'Contact']);
});



Route::get('/posts', function () {
    $posts = Post::latest();
    if(request('search')){

    }

    
    return view('posts',['title'=>'Blog','posts'=> $posts->get()]);
});

Route::get('/posts/{post:slug}', function(Post$post){
    

return view('posts',['title' => 'Single Post', 'posts' => $post]);

});

Route::get('/authors/{user:username}', function(User $user){
    $posts = $user->posts->load('category','author');

    return view('posts',['title' => count($posts). 'Articles by'. 
    $user->name, 'posts' => $posts]);
    
    });

    Route::get('/categories/{category:slug}', function(Category $category){
    
       // $posts = $category->posts->load('category','author');

        return view('posts',['title' => 'Articles in:'. $category->name, 'posts' => $category->posts]);
        
        });
    

Route::get('/contact', function () {
    return view('contact',['title'=>'Contact']);

    Route::resource('blogs',BlogController::class);
});

