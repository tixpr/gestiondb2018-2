<?php

use Illuminate\Database\Seeder;

class RevisersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=100;$i++){
            DB:: table('revisers')->insert([
                'created_at'=>now(),
                'updated_at'=> now(),
                'user_id'=>random_int(1,20),
                'pp_projection_id'=>random(1,20),
            ]);
        }
    }
}
