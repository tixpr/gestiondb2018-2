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
        for($i=1;$i<=500;$i++){
            DB::table('pp_reports')->insert([
                'type'              =>  random_int(0,1),
                'created_at'        =>  now(),
                'updated_at'        =>  now(),
                'pp_projection_id' =>  random_int(1,2000)
            ]);
        }
    }
}
