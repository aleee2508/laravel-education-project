<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('formation_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('formation_id')
                  ->references('id')->on('formations')
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
        Schema::dropIfExists('formation_user');
    }
}
