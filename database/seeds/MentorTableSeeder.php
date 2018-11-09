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
        for($i=1;$i<=100;$i++){
    		DB::table('mentors')->insert([
    		'pp_projection_id'=> random_int(1,100),
    		'user_id' => random_int(1,100),
            'created_at' => now()
        ]);

        }
    }
}
