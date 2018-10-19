<?php

use Illuminate\Database\Seeder;

class PpProjectionTableSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=1000;$i++){
        DB::table('p_proyections')->insert([
            'title'          => srt_random(12),
            'organization' => srt_random(15),
            'created_at'       => now(),
            'updated_at'    => now(),
            'exit_at'      => now(),
            'is_exit'      => true,
            'is_practice'      => random_int(0,1),
            'user_id'      => random_int(1,1000),

        ])
        }
    }
}
