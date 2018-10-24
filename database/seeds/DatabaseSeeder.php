<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserTableSeeder::class);
         $this->call(PpProjectionTableSeeder::class);
         $this->call(ReviserTableSeeder::class);
         $this->call(MemberTableSeeder::class);
         $this->call(MentorTableSeeder::class);
         $this->call(PasswordResetTableSeeder::class);
         
         $this->call(PpReportsTableSeeder::class);
         
    }
}
