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
        Schema::create("book_genre", function (Blueprint $table) {
            $table->foreignId("book_id");
            $table->foreign("book_id")
                ->references("id")
                ->on("books");
            $table->foreignId("genre_id");
            $table->foreign("genre_id")
                ->references("id")
                ->on("genres");
            $table->primary(["book_id", "genre_id"]);
            $table->unique(["book_id", "genre_id"]);
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
