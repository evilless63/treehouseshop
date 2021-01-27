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
            $table->string('title',255)->default('default');
            $table->string('media',255)->nullable();
            $table->string('mobile_media',255)->nullable();
            $table->text('content')->default('');
            $table->boolean('is_active')->default(false);
            $table->string('link_category')->default('');
            $table->integer('bannerposition_id')->nullable();
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
