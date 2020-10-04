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
            $table->string('title', 50)->unique();
            $table->string('short_description', 300);
            $table->text('body');
            $table->string('image')->nullable();
            $table->string('tags')->nullable();
            $table->integer('reading_duration');
            $table->boolean('is_published');
            $table->string('meta_title', 150);
            $table->string('meta_description', 150);
            $table->dateTime('published_at');
            $table->foreignId('category_id');
            $table->timestamps();
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
