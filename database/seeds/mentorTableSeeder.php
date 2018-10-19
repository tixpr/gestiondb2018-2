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
            DB::table('pp_projections')->insert([
                'created_at'=> now(),
                'updated_at' => now(),
                'is_practice' => random_int(0,1),
                'pp_projections_id' =>random_int(1,10),
                'user_id' =>random_int(1,10), 
            ]);
            }
        }
    }

