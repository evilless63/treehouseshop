<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->bigIncrements('id')->unsigned();
            $table->string('code')->unique();
            $table->bigInteger('category_id')->unsigned();
            $table->tinyInteger('brand_id')->unsigned();          
            $table->string('alias',255)->unique();          
            $table->float('price')->default(0);
            $table->float('old_price')->default(0)->nullable();
            $table->enum('status',['0','1'])->default(1);      
            $table->string('img',255)->nullable();
            $table->enum('hit',['0','1'])->default(0)->index();
            $table->string('sku',255)->default(NULL)->nullable();
            $table->string('weight',255)->default(NULL)->nullable();
            $table->string('dimension_x',255)->default(NULL)->nullable();
            $table->string('dimension_y',255)->default(NULL)->nullable();
            $table->string('dimension_z',255)->default(NULL)->nullable();
            $table->enum('is_new',['0','1'])->default(0)->index();

            $table->timestamps();
            $table->softDeletes();

            $table->index(['category_id','brand_id']);
        });

        Schema::create('product_localizations', function(Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('product_id')->unsigned()->index();
            $table->string('lang', 2);
            $table->string('title',255);
            $table->string('unit',255)->default(NULL)->nullable();
            $table->text('content')->nullable();
            $table->string('keywords',255)->default(NULL)->nullable();
            $table->string('description',255)->default(NULL)->nullable();
            $table->text('details')->nullable();           
            $table->text('composition_and_care')->nullable();       
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
