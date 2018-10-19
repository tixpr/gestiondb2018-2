<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        for($i=1;$i<=100;$i++){
            DB:: table('members')->insert([
                'user_id'=> random_int(1,50),
                'pp_projection_id'=>random_int(1,50),
            ]);
        }
    }
}
