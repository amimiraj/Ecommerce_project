<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblContactTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_contact', function (Blueprint $table) {
            $table->bigIncrements('contact_id');
            $table->string('contact_name', 100);
            $table->string('contact_email', 200);
            $table->string('contact_subject', 200);
            $table->text('contact_message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_contact');
    }

}
