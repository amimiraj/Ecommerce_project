<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalColumnToManufacturerTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('manufacturer', function (Blueprint $table) {
            //
            $table->tinyInteger('manufacturer_status')->default(1)->after('manufacturer_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('manufacturer', function (Blueprint $table) {
            //
            $table->dropColumn('manufacturer_status');
        });
    }

}
