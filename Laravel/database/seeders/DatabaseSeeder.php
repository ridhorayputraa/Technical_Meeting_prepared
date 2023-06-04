<?php

namespace Database\Seeders;

use Database\Factories\BookFactory;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();


                BookFactory::new()->count(8)->create();


// DB::table('books')->insert([
//     'name' => "Harry Potter and the Philosopher's Stone",
//     'genre_id' => 1, // Contoh nilai genre_id
//     'user_id' => 1, // Contoh nilai user_id
//     'author_id' => 1, // Contoh nilai author_id
//     'description' => 'This is a description of the book.', // Contoh deskripsi
//     'slug' => 'harry-potter-philosophers-stone', // Contoh slug
//     'price' => 9.99, // Contoh harga
//     'rating' => 4.5, // Contoh rating
//     'language' => 'English', // Contoh bahasa
//     'thumbnail' => 'path/to/thumbnail.jpg', // Contoh path thumbnail
// ]);

    }
}
