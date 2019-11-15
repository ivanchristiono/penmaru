<?php

use Illuminate\Database\Seeder;

class EventTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        $eventTypes = [
            ['name' => 'Pameran', 
            'description'=>'Membuka booth / stand dan melayani para tamu yang ingin mendapatkan informasi'],
            
            ['name' => 'Presentasi', 
            'description'=>'Mempresentasikan / promosi di depan orang banyak'],

            ['name' => 'Pameran & Presentasi', 
            'description'=>'Campuran Pameran + Presentasi'],

            ['name' => 'Safari',
            'description'=>'Melakukan kelilingan sekolahn di seputar kota tsb'],

            ['name' => 'Pameran di Mall',
            'description'=>'Membuka stand / booth di Mall atau dept store']
        ];

        //Masukkan data ke DB
        DB::table('event_types')->insert($eventTypes);
    
    }
}
