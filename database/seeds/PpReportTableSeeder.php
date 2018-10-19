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
        for($i=1;$i<=30;$i++){
            DB::table('pp_projections')->insert([
                'created_at'=> now(),
                'updated_at' => now(),
                'pp_projections_id' =>random_int(1,10)  
            ]);
            }
    }
}
