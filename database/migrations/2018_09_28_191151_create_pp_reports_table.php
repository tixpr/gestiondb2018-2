<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePpReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pp_reports', function (Blueprint $table) {
            $table -> bigIncrements ('id');
			$table -> unsignedTinyInteger ('tipo');
			$table -> timestamps ();
			$table -> unsignedBigInteger ('pp_projection_id');
			$table -> foreign ('pp_projection_id') -> references ('id') -> on ('pp_projections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pp_reports');
    }
}
