<?php

namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;
// use Faker\Generator as Faker;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use App\Models\Author;
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

         protected $model = Book::class;

public function definition()
    {
        $faker = \Faker\Factory::create();

        // Get random genre, user, and author
        $genre = Genre::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        $author = Author::inRandomOrder()->first();

        return [
            'name' => $faker->sentence(4),
            'genre_id' => $genre ? $genre->id : 1,
            'user_id' => $user ? $user->id : 1,
            'author_id' => $author ? $author->id : 1,
            'description' => $faker->paragraph,
            'slug' => Str::slug($faker->unique()->sentence(4)),
            'price' => $faker->randomFloat(2, 0, 100),
            'rating' => $faker->randomFloat(1, 0, 5),
            'language' => $faker->randomElement(['English', 'Spanish', 'French']),
            'thumbnail' => $faker->imageUrl(200, 200),
        ];
    }
}
