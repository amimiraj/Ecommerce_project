<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->text('slider_image');
            $table->string('slider_title', 255);
            $table->text('slider_text');
            $table->text('slider_status');
            $table->string('slider_link', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('sliders');
    }

}
