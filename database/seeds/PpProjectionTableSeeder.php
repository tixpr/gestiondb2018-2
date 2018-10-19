<?php

use Illuminate\Database\Seeder;

class PpProjectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=1;$i<=100;$i++) {
            Db::table('pp_projections')->insert([
                'title' => str_random(12),
                'organization' => str_random(15),
                'created_at'=>now(),
                'updated_at' => now(),
                'exit_at' =>now(),
                'is_exit' => true,
                'is_practice' => random_int(0,1),
                'user_id' => random_int(1,100),
    
            ]);
        }
    }
}
