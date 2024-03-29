<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigurationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuration_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('configuration_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('configuration_id')
                  ->references('id')->on('configurations')
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
        Schema::dropIfExists('configuration_user');
    }
}
