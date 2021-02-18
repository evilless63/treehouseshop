<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('alias',255)->unique();
        });

        Schema::create('page_localizations', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('page_id')->unsigned()->index();
            $table->string('lang', 2);
            $table->string('title',255);
            $table->string('keywords',255)->nullable();
            $table->string('description',255)->nullable();
            $table->text('content')->nullable();
            $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
