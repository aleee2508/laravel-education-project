<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollaboratorUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborator_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->integer('collaborator_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('collaborator_id')
                  ->references('id')->on('collaborators')
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
        Schema::dropIfExists('collaborator_user');
    }
}
