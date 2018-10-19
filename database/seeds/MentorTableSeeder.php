<?php

use Illuminate\Database\Seeder;

class MentorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=2000;$i++){
            db::table('mentors')->insert([
              'created_at'=>now(),
              'user_id'=>random_int(1,1000),
              'pp_projection_id'=>random_int(1,1000)
                  ]);
          
              }
    }
}
