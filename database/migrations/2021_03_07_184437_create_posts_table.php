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
            $table->timestamps();
            $table->string('alias',255)->unique();
            $table->string('image',255)->unique();
            $table->boolean('for_visitors')->defalut(false);
            $table->boolean('about_company')->defalut(false);
            $table->boolean('status')->defalut(false);
        });

        Schema::create('post_localizations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('post_id')->unsigned()->index();
            $table->string('lang', 2);
            $table->string('title',255);
            $table->text('content')->nullable();
            $table->string('keywords',255)->default(NULL)->nullable();
            $table->string('description',255)->default(NULL)->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
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
