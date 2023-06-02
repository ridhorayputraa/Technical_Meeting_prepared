<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // relatons
            $table->foreignId('genre_id');
            $table->foreignId('user_id');
            $table->foreignId('author_id');

            // Field
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('slug')->unique();
            $table->integer('price')->nullable();
            $table->double('rating')->nullable();
            $table->string('language')->nullable();
            $table->text('thumbnail')->nullable();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
