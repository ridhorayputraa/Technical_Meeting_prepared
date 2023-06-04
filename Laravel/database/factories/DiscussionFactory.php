<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscussionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

        //  protected $model = Book::class;

public function definition()
    {
        $faker = \Faker\Factory::create();

        // Get random genre, user, and author
        // $genre = Genre::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        $book = Book::inRandomOrder()->first();
        // $author = Author::inRandomOrder()->first();

        return [
            'user_id' => $user ? $user->id : 1,
            'book_id' => $book ? $book->id : 1,
            'body' => $faker->sentence(10),
            // 'description' => $faker->paragraph,
            // 'slug' => Str::slug($faker->unique()->sentence(4)),
            // 'price' => $faker->randomFloat(2, 0, 100),
            // 'rating' => $faker->randomFloat(1, 0, 5),
            // 'language' => $faker->randomElement(['English', 'Spanish', 'French']),
            // 'thumbnail' => $faker->imageUrl(200, 200),
        ];
    }
}
