<?php

use Illuminate\Database\Seeder;

class ReviserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=1;$i<=1000;$i++){
            DB::table('revisers')->insert([
                
                'user_id' => random_int(1,1000),
                'pp_projection_id'=>random_int(1,1000),
                'users'=>random_int(1,1000),
                'pp_projections'=>str_random(15)
                
            ]);

        }
    }
}
