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
    for($i=1;$i<=100;$i++){
        DB::table('users')->insert([
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'created_at'=> now(),
            'updated_at' => now(),
            'username' => str_random(15),
            'is_valid'  => true
        ]);
        }
    }
}
