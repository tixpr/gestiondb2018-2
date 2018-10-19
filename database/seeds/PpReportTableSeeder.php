<?php

use Illuminate\Database\Seeder;

class PpReportTableSeeder extends Seeder
{

    public function run()
    { 
        for($i=1;$i<=100;$i++){
            DB::table('pp_reports')->insert([
                'type'=> random_int(0,1),
                'created_at' => now(),
                'updated_at' => now(),
                'user_id'    => random_int(1,100),
                'pp_projection_id'  => random_int(1,100)
            ]);
        }
    }
}
