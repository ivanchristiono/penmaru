<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = [
            ['name'=>'SMA Hang Tuah 2', 'Jl. KRI Ratulangi No.1, Sawotratap, Gedangan, Sawotratap, Gedangan, Dusun Pager, Sawotratap, Kec. Gedangan ', 3, '(031) 8541134', 'https://smahangtuah2sda.sch.id/', 'smahangtuah.dua@gmail.com'],
            ['name'=>'SMA Barunawati', 'Jl. Perak Bar. No.173, Perak Utara, Kec. Pabean Cantian', 1, '(031) 3291312', 'https://smabarunawati-sby.sch.id/', 'info@smabarunawati-sby.sch.id'],
            ['name'=>'SMA Barunawati', 'Jl. Simpang Borobudur No.1, Mojolangu, Kec. Lowokwaru', 2, '(0341) 410590', 'http://smakkosayu.sch.id/v3/', 'info@smakkosayu.sch.id'],
        ];

            //Masukkan data ke DB
            DB::table('schools')->insert($schools);

    }
}
