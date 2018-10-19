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
        for($i=1;$i=100;$i++){DB::table('pp_members')->insert([
            'type'           => random_int(15),
            'created_at'     =>now(),
            'update_at'      =>now(),
            'pp_porjection_id'       =>random_int(1,1000)
            ]);
        }
    }
}
