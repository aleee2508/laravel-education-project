<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticeUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('notice_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('notice_id')
                  ->references('id')->on('notices')
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
        Schema::dropIfExists('notice_user');
    }
}
