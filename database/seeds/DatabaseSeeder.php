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
        $this->call(memberTableSeeder::class);
        $this->call(mentorTableSeeder::class);
        $this->call(PpReportTableSeeder::class);
        $this->call(reviserTableSeeder::class);
    }
}
