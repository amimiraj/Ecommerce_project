<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cart', function (Blueprint $table) {
            $table->bigIncrements('cart_id');
            $table->string('session_id',256);
            $table->bigInteger('product_id');
            $table->string('product_name',100);
            $table->string('product_img_one',200);
            $table->string('product_qty',200);
            $table->string('product_discount_price',50);
            $table->string('product_sku',100);
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
        Schema::dropIfExists('tbl_cart');
    }
}
