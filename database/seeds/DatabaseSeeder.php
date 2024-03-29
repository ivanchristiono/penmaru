<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ProvinceTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        $this->call(EventTypeTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
