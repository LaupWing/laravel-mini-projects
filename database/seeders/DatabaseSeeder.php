<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
      GenreBookFactory::factory(100)->create();
   }
}
