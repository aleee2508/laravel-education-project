<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('slider_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('slider_id')
                  ->references('id')->on('sliders')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider_user');
    }
}
