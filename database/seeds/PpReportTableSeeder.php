<?php

use Illuminate\Database\Seeder;

class PpReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        { for($i=1;$i<=200;$i++){
            DB::table('pp_reports')->insert([
               'created_at'	=> now(),
               'updated_at'	=> now(),
               'tipo'    => random_int(1,100),
               'pp_p_projection_id' =>random_int(1,2000)

            ]);   
        }
    }
}
}
