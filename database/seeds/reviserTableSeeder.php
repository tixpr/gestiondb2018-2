<?php

use Illuminate\Database\Seeder;

class reviserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            for($i=1;$i<=20;$i++){
            DB::table('pp_projections')->insert([
                'created_at'=> now(),
                'updated_at' => now(),
                'pp_projections_id' =>random_int(1,10),
                'user_id' =>random_int(1,10), 
            ]);
            }
    }
}
}
