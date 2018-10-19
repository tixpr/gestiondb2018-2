<?php

use Illuminate\Database\Seeder;

class MentorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        { for($i=1;$i<=500;$i++){
            DB::table('mentors')->insert([
               'created_at'	=> now(),
               'pp_p_projections_id' =>random_int(1,2000),
               'user_id' =>random_int(1,1000)
               
            ]);   
        }
    }
    }
}
