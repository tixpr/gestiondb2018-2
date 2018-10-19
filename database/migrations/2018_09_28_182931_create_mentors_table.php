<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('create_at')
            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('pp_projections_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pp_projections_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentors');
    }
}
