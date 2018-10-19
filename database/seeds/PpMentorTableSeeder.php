<?php

use Illuminate\Database\Seeder;

class PpMentorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=500;$i++){
            DB::table('pp_mentors')->insert([
                'created_at'       =>   now(),
                'user_id'           =>  random_int(1,1000),
                'pp_projections_id'  =>  random_int(1,2000)
            ]);
        }
    }
}
