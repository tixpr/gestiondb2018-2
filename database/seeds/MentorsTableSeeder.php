<?php

use Illuminate\Database\Seeder;

class MentorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=100;$i++){
            DB:: table('mentors')->insert([
                'created_at'    => now(),
                'updated_at'    =>now(),
                'create_at' =>now(),
                'pp_projections_id' => random_int(1,100),
                'user_id'   =>random_int(1,100),
            ]);
        }
    }
}
