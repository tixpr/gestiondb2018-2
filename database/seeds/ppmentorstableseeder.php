<?php

use Illuminate\Database\Seeder;

class ppmentorstableseeder extends Seeder
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
            DB::table('pp_mentors')->insert([
               'created_at' => now(),
               'useri_id' => random_int(1,100),
               'pp_projection_id' => random_int(1,200)
            ]);
    }
}
}
