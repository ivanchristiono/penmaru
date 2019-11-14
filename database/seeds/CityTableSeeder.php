<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['name' => 'Surabaya', 'province_id' => 1],
            ['name' => 'Malang', 'province_id' => 1],
            ['name' => 'Siodoarjo', 'province_id' => 1],
            ['name' => 'Pasuruan', 'province_id' => 1],
            ['name' => 'Balikpapan', 'province_id' => 4],
            ['name' => 'Samarinda', 'province_id' => 4],
            ['name' => 'Semarang', 'province_id' => 2],
            ['name' => 'Solo', 'province_id' => 2],
            ['name' => 'Banjarmasin', 'province_id' => 8],
            ['name' => 'Pontianak', 'province_id' => 6]
        ];

        //Masukkan data ke DB
        DB::table('cities')->insert($cities);
    }
}
