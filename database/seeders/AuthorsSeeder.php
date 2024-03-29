<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory()
            ->count(5)
            ->has(Book::factory()->count(10))
            ->create();
        Author::factory()
            ->count(5)
            ->hasBooks(10)
            ->create();
    }
}
