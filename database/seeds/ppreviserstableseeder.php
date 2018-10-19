<?php

use Illuminate\Database\Seeder;

class ppreviserstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i>=100;$i++)
        {
            DB::table('pp_revisers')->insert([
               'user_id' => random_int(1,100),
               'pp_projection_id' => random_int(1,200),
               'created_at' => now(),
               'updated_at' => now(),
            ]);
        
            }
    }
}