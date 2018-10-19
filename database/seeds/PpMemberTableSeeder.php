<?php

use Illuminate\Database\Seeder;

class PpMemberTableSeeder extends Seeder
{

    public function run()
    {
        for($i=1;$i<=100;$i++){
            DB::table('pp_members')->insert([
                'user_id' => random_int(1,100),
                'pp_projection_id'  => random_int(1,100)
            ]);
        }
    }
}
