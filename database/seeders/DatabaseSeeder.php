<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Genre;
use App\Models\User;
use Database\Factories\GenreBookFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   /**
    * Seed the application's database.
    */
   public function run(): void
   {
      User::factory(5)->create();
      User::factory()->create([
         "name" => "Test User",  
         "email" => "test@example.com",
      ]);
      $this->call([
         GenreSeeder::class,
         AuthorsSeeder::class
      ]);
      logger(Genre::all()->count());
      logger(Book::all()->count());
      // GenreBookFactory::factory(100)->create();
   }
}
