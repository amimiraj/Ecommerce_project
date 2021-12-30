<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customer', function (Blueprint $table) {
             $table->bigIncrements('customer_id');
            $table->string('customer_name',100);
            $table->string('customer_email',200);
            $table->string('customer_password',50);
            $table->string('customer_phone',50);
            $table->string('customer_city',50);
            $table->string('customer_zip_code',50);
            $table->string('customer_country',50);
            $table->text('customer_address');
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
        Schema::dropIfExists('tbl_customer');
    }
}
