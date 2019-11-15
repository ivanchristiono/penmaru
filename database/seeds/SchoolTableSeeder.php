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
            ['name'=>'SMA Hang Tuah 2', 
            'address' => 'Jl. KRI Ratulangi No.1, Sawotratap, Gedangan, Sawotratap, Gedangan, Dusun Pager, Sawotratap, Kec. Gedangan ', 
            'city_id' => 3, 
            'phone' => '(031) 8541134', 
            'website' => 'https://smahangtuah2sda.sch.id/', 
            'email' => 'smahangtuah.dua@gmail.com'],

            ['name'=>'SMA Barunawati', 
            'address' => 'Jl. Perak Bar. No.173, Perak Utara, Kec. Pabean Cantian',
            'city_id' => 1, 
            'phone' =>'(031) 3291312',
            'website' => 'https://smabarunawati-sby.sch.id/',
            'email' =>'info@smabarunawati-sby.sch.id'],

            ['name'=>'SMA Barunawati', 
            'address' => 'Jl. Simpang Borobudur No.1, Mojolangu, Kec. Lowokwaru',
            'city_id' => 2,
            'phone' => '(0341) 410590',
            'website' => 'http://smakkosayu.sch.id/v3/',
            'email' => 'info@smakkosayu.sch.id'],
        ];

            //Masukkan data ke DB
            DB::table('schools')->insert($schools);

    }
}
