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
      Schema::create("books", function (Blueprint $table) {
         $table->id();
         $table->timestamps();
         $table->string("title");
         $table->date("publication_date");
         $table->foreignId("author_id");
         $table->foreign("author_id")
            ->references("id")
            ->on("authors");
         $table->foreign("lender_id")
            ->references("id")
            ->on("users")
            ->nullable();
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
      Schema::dropIfExists("books");
   }
};
