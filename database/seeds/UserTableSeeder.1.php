<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for($i=1;$i<=1000;$i++){
            DB::table('users')->insert([
                'email' => 'usuario' .$i.'@gmail.com',
                'password' => bcrypt('12345'),
                'created_at'=>now(),
                'updated_at'=>now(),
                'username'=>str_random(15),
                'is_valid'=>true
            ]);

        }
    }
}
