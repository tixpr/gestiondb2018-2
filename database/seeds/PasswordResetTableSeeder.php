<?php

use Illuminate\Database\Seeder;

class PasswordResetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

            DB::table('password_resets')->insert([
                'email' => 'usuario' .$i.'@gmail.com',
                
                'created_at'=>now(),
        
                'token'=>str_random(15),
                
            ]);

        
    }
}

