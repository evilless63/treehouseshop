<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Add1cinfoToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('sku',255)->default(NULL)->nullable();
            $table->string('weight',255)->default(NULL)->nullable();
            $table->string('dimension_x',255)->default(NULL)->nullable();
            $table->string('dimension_y',255)->default(NULL)->nullable();
            $table->string('dimension_z',255)->default(NULL)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
