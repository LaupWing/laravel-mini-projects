<?php

namespace Database\Factories;

use App\Models\Genre;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
   /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
   public function definition(): array
   {
      return [
         "title" => fake()->sentence(),
         "description" => fake()->text(),
         "publication_date" => fake()->date(),
         "genre_id" => fake()->numberBetween(1, Genre::count()),
         "lender_id" => fake()->optional(0.5)->numberBetween(1, User::count()),
      ];
   }
}
