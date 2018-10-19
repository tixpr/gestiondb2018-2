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
        $this->call(ppprojectionstableseeder::class);
        $this->call(ppmemberstableseedereseeder::class);
        $this->call(ppmentorstableseedertableseeder::class);
        $this->call(ppreportstableseeder::class);
        $this->call(ppreviserstableseedertableseeder::class);
    }
}
