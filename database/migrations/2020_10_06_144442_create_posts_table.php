<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 100)->unique();
            $table->string('title', 100)->unique();
            $table->string('short_description', 500);
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('tags')->nullable();
            $table->integer('reading_duration');
            $table->boolean('is_published');
            $table->string('meta_title', 100);
            $table->string('meta_description', 500);
            $table->dateTime('published_at');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}