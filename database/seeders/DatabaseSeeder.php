<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User; // Import Model User
use Illuminate\Support\Str; // Import Str
use Illuminate\Database\Seeder; // Import Seeder
use Illuminate\Support\Facades\Hash; // Import Hash

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tambahkan pengguna baru ke database
        // User::create([
        //     'name' => 'Annisa',
        //     'username' => 'annisa',
        //     'email' => 'annisa@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'), // Enkripsi password
        //     'remember_token' => Str::random(10), // Token random
        // ]);

        // Category::create([
        //     'name' => 'Web Design',
        //     'slug' => 'web-design',
        // ]);

        // Post::created([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => '1',
        //     'category_id' => 1, // ID kategori 'Web Design'
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ducimus accusamus voluptatum ut temporibus fuga natus sed consequuntur, dolores incidunt saepe. Laborum deleniti aspernatur aliquid quod, id quibusdam veniam quam.'
        // ]);
        $this->call([CategorySeeder::class,UserSeeder::class]);
        Post::factory(100)->recycle([
           Category::all(),
           User::all()
        ])->create();
    }
}
