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
         $this->call(MentorsTableSeeder::class);
         $this->call(PpReportsTableSeeder::class);
        
         $this->call(RevisersTableSeeder::class);
         $this->call(MembersTableSeeder::class);
         
    }
}
