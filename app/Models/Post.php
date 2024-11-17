<?php
namespace App\Models;

use Illuminate\Support\Arr;



class Post{
public static function all(){
    return [
        [
        'id'=> 1,
        'slug' => 'judul-artikel-1',
        'title' => 'Judul Artikel 1',
        'author' => 'Annisa septiyani',
        'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus dignissimos praesentium 
    nisi eum quia voluptatibus ab vel ad cum. Vero, adipisci dolorem exercitationem esse illum 
    aliquid labore nobis ea. Impedit.'
    ]
    ];
}

public static function find($slug) : array  {
   //return Arr:: first(static::all(),function($posts) use ($slug){
   //     return $posts['slug'] == $slug;
   // });
    $post = Arr::first(static::all(),fn($posts) => $posts['slug'] == $slug);
if(!$post){
   abort(404); 
}
return $post;
}
}