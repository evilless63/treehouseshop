<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('media',255)->nullable();
            $table->string('mobile_media',255)->nullable();           
            $table->boolean('is_active')->default(false);
            $table->string('link_category')->default('');
            $table->integer('bannerposition')->nullable();
        });

        Schema::create('banner_localizations', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('banner_id')->unsigned()->index();
            $table->string('lang', 2);
            $table->string('title',255);
            $table->text('content')->nullable();
            $table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banners');
    }
}
