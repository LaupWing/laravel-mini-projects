<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("genre_book", function (Blueprint $table) {
            $table->foreignId("book_id");
            $table->foreign("book_id")
                ->references("id")
                ->on("books");
                $table->foreignId("book_id");
                $table->foreign("book_id")
                    ->references("id")
                    ->on("books");
            $table->foreignId("genre_id");
            $table->foreign("genre_id")
                ->references("id")
                ->on("genres");
                $table->foreignId("genre_id");
                $table->foreign("genre_id")
                    ->references("id")
                    ->on("genres");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
