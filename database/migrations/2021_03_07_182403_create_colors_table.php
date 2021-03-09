<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('alias',255)->unique();
            $table->string('hex')->default('ffffff');
            $table->string('img',255)->nullable();
            $table->enum('hit',['0','1'])->default(0)->index();
            $table->enum('is_new',['0','1'])->default(0)->index();
        });

        Schema::create('color_localizations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('color_id')->unsigned()->index();
            $table->string('lang', 2);
            $table->string('title',255);
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colors');
    }
}
