<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProductDetailsImgColumnToProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('products', function (Blueprint $table) {

            $table->string('product_details_img_one')->after('product_img_four');
            $table->string('product_details_img_two')->after('product_details_img_one')->nullable();
            $table->string('product_details_img_three')->after('product_details_img_two')->nullable();
            $table->string('product_details_img_four')->after('product_details_img_three')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('product_details_img_one');
            $table->dropColumn('product_details_img_two');
            $table->dropColumn('product_details_img_three');
            $table->dropColumn('product_details_img_four');
        });
    }

}
