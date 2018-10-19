<?php

use Illuminate\Database\Seeder;

class ppreportstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=1000;$i++){
            DB::table('pp_reports')-> insert ([
                'id' => str_random(12),
                'type' => str_random(30),
                'created_at' => now(),
                'updated_at' => now(),
                'exit_at' => now(),
                'is_exit' =>true,
                'pp_projection_id' => random_int(1,500),
        ]);
    }
}
}
