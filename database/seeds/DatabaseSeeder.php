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
        $this->call(PpReportTableSeeder::class);
        $this->call(PpReviserTableSeeder::class);
        $this->call(PpMemberTableSeeder::class);
        $this->call(PpMentorTableSeeder::class);
    }
}

