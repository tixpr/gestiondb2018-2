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
        $this->call(PpProjectionTableSeeder::class);
        $this->call(ppmentorstableseeder::class);
        $this->call(ppmemberstableseeder::class);
        $this->call(ppreviserstableseeder::class);
        $this->call(ppreportstableseeder::class);
        $this->call(userTableseeder::class);
    }
}
