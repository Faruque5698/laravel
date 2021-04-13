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
            $table->increments('id');
            $table->integer('cat_id');
            $table->integer('brand_id');
            $table->string('pro_name');
            $table->text('pro_short_desc');
            $table->text('pro_long_desc');
            $table->float('pro_price',10,2);
            $table->float('pro_discount',10,2);
            $table->integer('pro_qty');
            $table->text('pro_image');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('products');
    }
}
