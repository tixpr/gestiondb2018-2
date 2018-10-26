<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePpMentorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp_mentors', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->date('created_at');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
			$table->unsignedBigInteger('pp_projection_id');
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
        Schema::dropIfExists('pp_mentors');
    }
}