<?php

use Illuminate\Database\Seeder;

class pp_reportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=150;$i++){
            DB::table('pp_reports')->insert([
                'type'=>random_int(1,10),
                'created_at'=>now(),
                'updated_at'=>now(),
                'pp_projection_id'=>random_int(1,100),
            ]);
        }
    }
}
