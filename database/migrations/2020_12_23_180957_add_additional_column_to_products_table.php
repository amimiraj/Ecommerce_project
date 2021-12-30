<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnToProductsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('products', function (Blueprint $table) {

            $table->string('product_img_one')->after('manufacturer_id');
            $table->string('product_img_two')->after('product_img_one')->nullable();
            $table->string('product_img_three')->after('product_img_two')->nullable();
            $table->string('product_img_four')->after('product_img_three')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('products', function (Blueprint $table) {

            $table->dropColumn('product_img_one');
            $table->dropColumn('product_img_two');
            $table->dropColumn('product_img_three');
            $table->dropColumn('product_img_four');
        });
    }

}
