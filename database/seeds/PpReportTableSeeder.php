<?php

use Illuminate\Database\Seeder;

class PpReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=100;$i++) {
            Db::table('pp_reports')->insert([
                'user_id' => random_int(1,100),
                'pp_projections_id' => random_int(1,100),
                'created_at' =>now(),
                'updated_at' =>now(),
                'type' => random_int(1,100),
            ]);
        }
    }
}
