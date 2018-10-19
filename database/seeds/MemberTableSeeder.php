<?php

use Illuminate\Database\Seeder;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        { for($i=1;$i<=500;$i++){
            DB::table('members')->insert([
               'user_id'    => random_int(1,1000),
               'pp_p_projection_id' =>random_int(1,2000)

            ]);   
        }
    }
}
}
  
    

