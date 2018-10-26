<?php

use Illuminate\Database\Seeder;

class mentorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=20;$i++){
            DB::table('pp_mentors')->insert([
                'pp_projection_id' =>random_int(1,10),
                'user_id' =>random_int(1,10), 
                'created_at'=> now()
            ]);
            }
        }
    }

