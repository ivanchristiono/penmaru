<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            ['name' => 'Jawa Timur'],
            ['name' => 'Jawa Tengah'],
            ['name' => 'Jawa Barat'],
            ['name' => 'Kalimantan Timur'],
            ['name' => 'Kalimantan Tengah'],
            ['name' => 'Kalimantan Barat'],
            ['name' => 'Kalimantan Utara'],
            ['name' => 'Kalimantan Selatan'],
            ['name' => 'Bali']
        ];

        //Masukkan data ke DB
        DB::table('provinces')->insert($provinces);
    }
}
