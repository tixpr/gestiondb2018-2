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
  
 
    for($i=1;$i<=2000;$i++){
  db::table('pp_projections')->insert([
        'type' =>random_int(1,12),
        'created_at' =>now(),
        'updated_at' =>now(),
        'pp_projection_id' =>random_int(1,1000)
        ]);

    }
    }
}
