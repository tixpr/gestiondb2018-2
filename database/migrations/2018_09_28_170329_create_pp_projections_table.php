<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpProjectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp_projections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',200);
            $table->string('organization',200);
            $table->timestamps();
            $table->date('exit_at');
            $table->boolean('is_exit')->default(false);
            $table->boolean('is_practice');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pp_projections');
    }
}
