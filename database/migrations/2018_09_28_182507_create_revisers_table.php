<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRevisersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp_revisers', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->timestamps();
			$table->unsignedBigInteger('user_id');
			$table->unsignedBigInteger('pp_projection_id');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('pp_projection_id')->references('id')->on('pp_projections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('revisers');
    }
}
