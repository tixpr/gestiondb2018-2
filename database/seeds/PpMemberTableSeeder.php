<?php

use Illuminate\Database\Seeder;

class PpMemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=100;$i++){
            DB::table('pp_reports')->insert([
                'pp_projection_id'  => random_int(1,1000),
                'pp_projection_id'  => random_int(1,1000),
            ]); 
        }
    }
}
