<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnToTblCardTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('tbl_cart', function (Blueprint $table) {

            $table->string('sub_total')->after('product_img_one');
            $table->string('total')->after('sub_total');
            $table->string('unit_price')->after('total');
            $table->string('added_items')->after('unit_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('tbl_cart', function (Blueprint $table) {

            $table->dropColumn('sub_total');
            $table->dropColumn('total');
            $table->dropColumn('unit_price');
            $table->dropColumn('added_items');
        });
    }

}
